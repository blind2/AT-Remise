@ECHO OFF
REM Copie un dossier et ses sous-dossiers dans le nuage (Google Drive, DropBox ou autre dossier synchronis‚ sur un serveur)
REM en ajoutant la date du jour au dossier principal
REM Cr‚e ‚galement un script SQL de la base de donn‚es MySQL et le copie dans le mˆme dossier.
REM Note : Pour que les accents pr‚sents dans les echo s'affichent correctement, utiliser l'encodage IBM850 ou OEM 720.
REM Note : Si des noms de dossiers contiennent des caractŠres accentu‚s, utilisez l'encodage Windows 1252 ou ANSI
REM ÿ ÿ ÿ ÿet ajoutez l'instruction CHCP 1252.
REM Programm‚ par Christiane Lagac‚ : https://christianelagace.com
REM Le 26 mars 2013
REM Dernier ajustement par Christiane Lagac‚
REM Le 28 janvier 2020
REM Modifications : Chemins sugg‚r‚s ajust‚s pour AMPPS.
ÿ
REM *************************
REM ***** Configuration *****
REM *************************
ÿ
REM ***** VOUS DEVEZ REMPLIR CETTE SECTION *****
ÿ
REM Chemin pour acc‚der au dossier du projet. Placer entre guillemets s'il contient des espaces.
REM (ex : "C:\Program Files\Ampps\www")
set cheminSource="C:\Program Files\Ampps\www"
ÿ
REM Nom du dossier contenant le projet … sauvegarder (ex : monprojet)
set dossierSource=trudellealexandre-remise
ÿ
REM Chemin du dossier infonuagique (ex : C:\Users\MonNom\Google Drive)
set cheminCible="C:\Users\alexa\Google Drive"
ÿ
REM Nom du dossier dans lequel le projet doit ˆtre copi‚ÿ(ex : monprojet)
REM Le dossier sera cr‚‚ sur Google Drive ou DropBox avec la date du jour … la fin de son nom.
set dossierCible=trudellealexandre-remise
ÿ
REM Chemin du dossier contenant le fichier mysqldump.exeÿ
REM (ex : "C:\Program Files\Ampps\mysql\bin")
set cheminMySQLBin="C:\Program Files\Ampps\mysql\bin"
ÿ
REM Nom de l'usager MySQL qui d‚tient les droit requis pour sauvegarder la base de donn‚es
set usagerMySQL=root
ÿ
REM Nom de la base de donn‚es … sauvegarder
set nomBD=remise_trudellealexandre
ÿ
REM *****************************
REM ***** Fin configuration *****
REM *****************************
ÿ
REM ***** Cr‚ation des variables pour la date *****
REM La commande "WMIC OS GET localdatetime" retrouve la date au format ISO.ÿ
REM Le caractŠre ^ (caret) est un caractŠre d'‚chappement.
REM Le caractŠre | (pipe) permet de rediriger la sortie de WMIC vers la commande find.ÿ
REM Puisqu'on veut conserver toute la chaŒne, on recherche n'importe quel caractŠre : find "."
REM Autrement dit, cette ligne place toute la date dans la variable dateISO.
ÿ
for /f %%a in ('WMIC OS Get localdatetime ÿ^| find "."') do set dateISO=%%a
set annee=%dateISO:~0,4%
set mois=%dateISO:~4,2%
set jour=%dateISO:~6,2%
ÿ
echo *************************
echo ***** Copie du site *****
echo *************************
ÿ
@echo on
XCOPY %cheminSource%\%dossierSource%\* %cheminCible%\%dossierCible%-%annee%-%mois%-%jour% /S /I
@echo off
ÿ
echo ***********************************************
echo ***** Cr‚ation du script pour la BD MySQL *****
echo ***********************************************
ÿ
@echo on
CD %cheminMySQLBin%
mysqldump -u %usagerMySQL% -p --routines --comments --triggers %nomBD% > %cheminCible%\%dossierCible%-%annee%-%mois%-%jour%\%nomBD%-%annee%-%mois%-%jour%.sql
@echo off
ÿ
echo *******************
echo ***** Termin‚ *****
echo *******************
echo.
echo Les fichiers ont ‚t‚ copi‚s dans le dossier
echo %cheminCible%\%dossierCible%-%annee%-%mois%-%jour%
echo.
PAUSE
