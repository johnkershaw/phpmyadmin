<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';

// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php
// to define the variable below
$datefmt = '%d/%m %Y kl. %H:%M:%S';
$timespanfmt = '%s dage, %s timer, %s minutter og %s sekunder';

$strAPrimaryKey = 'Der er føjet en primær nøgle til %s';
$strAbortedClients = 'Afbrudt';
$strAbsolutePathToDocSqlDir = 'Indtast venligst absolut sti på webserveren til docSQL mappen';
$strAccessDenied = 'Adgang Nægtet';
$strAccessDeniedExplanation = 'phpMyAdmin forsøgte at forbinde til MySQL-serveren, og serveren afviste forbindelsen. Du bør tjekke host, brugernavn og kodeord i config.inc.php og sikre dig at de svarer til den information du har fået af administratoren af MySQL-serveren.';
$strAction = 'Handling';
$strAddAutoIncrement = 'Tilføj AUTO_INCREMENT værdi';
$strAddConstraints = 'Tilføj begrænsninger';
$strAddDeleteColumn = 'Tilføj/Slet felt kolonne';
$strAddDeleteRow = 'Tilføj/Slet kriterie række';
$strAddDropDatabase = 'Tilføj DROP DATABASE';
$strAddIntoComments = 'Tilføj til kommentarer';
$strAddNewField = 'Tilføj nyt felt';
$strAddPriv = 'Tilføj nyt privilegium';
$strAddPrivMessage = 'Du har tilføjet et nyt privilegium.';
$strAddPrivilegesOnDb = 'Tilføj privilegier på følgende database';
$strAddPrivilegesOnTbl = 'Tilføj privileges på følgende tabel';
$strAddSearchConditions = 'Tilføj søgekriterier (kroppen af "WHERE" sætningen):';
$strAddToIndex = 'Føj til indeks &nbsp;%s&nbsp;kolonne(r)';
$strAddUser = 'Tilføj en ny bruger';
$strAddUserMessage = 'Du har tilføjet en ny bruger.';
$strAddedColumnComment = 'Tilføjet kommentar for kolonne';
$strAddedColumnRelation = 'Tilføjet relation for kolonne';
$strAdministration = 'Administration';
$strAffectedRows = 'Berørte rækker:';
$strAfter = 'Efter %s';
$strAfterInsertBack = 'Retur';
$strAfterInsertNewInsert = 'Indsæt en ny record';
$strAll = 'Alle';
$strAllTableSameWidth = 'vis alle tabeller med samme bredde?';
$strAlterOrderBy = 'Arranger rækkeorden efter';
$strAnIndex = 'Der er tilføjet et indeks til %s';
$strAnalyzeTable = 'Analyser tabel';
$strAnd = 'Og';
$strAny = 'Enhver';
$strAnyColumn = 'Enhver kolonne';
$strAnyDatabase = 'Enhver database';
$strAnyHost = 'Enhver vært';
$strAnyTable = 'Enhver tabel';
$strAnyUser = 'Enhver bruger';
$strArabic = 'Arabisk';
$strArmenian = 'Armensk';
$strAscending = 'Stigende';
$strAtBeginningOfTable = 'I begyndelsen af tabel';
$strAtEndOfTable = 'I slutningen af tabel';
$strAttr = 'Attributter';
$strAutodetect = 'Fastslå automatisk';
$strAutomaticLayout = 'Automatisk layout';

$strBack = 'Tilbage';
$strBaltic = 'Baltisk';
$strBeginCut = 'BEGYND KLIP';
$strBeginRaw = 'BEGYND RÅ';
$strBinary = ' Binært ';
$strBinaryDoNotEdit = ' Binært - må ikke ændres ';
$strBookmarkAllUsers = 'Lad alle brugere få adgang til bogmærket';
$strBookmarkDeleted = 'Bogmærket er fjernet.';
$strBookmarkLabel = 'Mærke';
$strBookmarkOptions = 'Indstillinger for bogmærke';
$strBookmarkQuery = 'SQL-forespørgsel med bogmærke';
$strBookmarkThis = 'Lav bogmærke til denne SQL-forespørgsel';
$strBookmarkView = 'Kun oversigt';
$strBrowse = 'Vis';
$strBrowseForeignValues = 'Bladr i udenlandske værdier';
$strBulgarian = 'Bulgarsk';
$strBzError = 'phpMyAdmin kunne ikke komprimere dumpet pga. en ødelagt Bz2-udvidelse i denne php-version. Det anbefales stærkt at sætte <code>$cfg[\'BZipDump\']</code>-direktivet i din phpMyAdmin konfigurationsfil til <code>FALSE</code>. HVis du vil bruge Bz2 komprimeringsudvidelser, bør du opdatere til en nyere php version. Se php bug report %s for detaljer.';
$strBzip = '"bzipped"';

$strCSVOptions = 'CSV indstillinger';
$strCannotLogin = 'Kan ikke logge ind på MySQL-serveren';
$strCantLoad = 'kan ikke indlæse udvidelsen %s,<br />check PHP-konfigurationen!';
$strCantLoadRecodeIconv = 'Kan ikke indlæse iconv eller omkode nødvendig udvidelse til karaktersæt-konvertering, konfigurer php til at tillade brug af disse udvidelser eller slå karaktersæt-konvertering fra i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan ikke omdøbe indeks til PRIMARY!';
$strCantUseRecodeIconv = 'Kan ikke bruge iconv ejheller libiconv eller recode_string funktionen omend udvidelsen ser ud til at være indlæst. Check din php-konfiguration.';
$strCardinality = 'Kardinalitet';
$strCarriage = 'Carriage return: \\r';
$strCaseInsensitive = 'ingen forskel på store/små bogstaver';
$strCaseSensitive = 'forskel på store/små bogstaver';
$strCentralEuropean = 'Centraleuropæisk';
$strChange = 'Ændre';
$strChangeCopyMode = 'Opret en bruger med samme privilegier og ...';
$strChangeCopyModeCopy = '... behold den gamle.';
$strChangeCopyModeDeleteAndReload = ' ... slet den gamle fra brugertabellerne og genindlæs privilegierne efterfølgende.';
$strChangeCopyModeJustDelete = ' ... slet den gamle fra brugertabellerne.';
$strChangeCopyModeRevoke = ' ... tilbagekald alle aktive privilegier fra den gamle og slet den efterfølgende.';
$strChangeCopyUser = 'Ret Login Information / Kopiér bruger';
$strChangeDisplay = 'Vælg felt der skal vises';
$strChangePassword = 'Ændre password';
$strCharset = 'Karaktersæt';
$strCharsetOfFile = 'Karaktersæt for filen:';
$strCharsets = 'Karaktersæt';
$strCharsetsAndCollations = 'Karaktersæt og kollationer (Collations)';
$strCheckAll = 'Afmærk alt';
$strCheckDbPriv = 'Tjek database privilegier';
$strCheckOverhead = 'Markér tabeller med overhead';
$strCheckPrivs = 'Check Privilegier';
$strCheckPrivsLong = 'Check privilegier for database &quot;%s&quot;.';
$strCheckTable = 'Tjek tabel';
$strChoosePage = 'Vælg en side der skal redigeres';
$strColComFeat = 'Viser kolonne-kommentarer';
$strCollation = 'Kollation (Collation)';
$strColumn = 'Kolonne';
$strColumnNames = 'Kolonne navne';
$strColumnPrivileges = 'Kolonne-specifikke privilegier';
$strCommand = 'Kommando';
$strComments = 'Kommentarer';
$strCompleteInserts = 'Lav komplette inserts';
$strCompression = 'Komprimering';
$strConfigFileError = 'phpMyAdmin kunne ikke læse din konfigurationsfil!<br />Dette kan ske hvis php finder en parser-fejl i den, eller php kan ikke finde filen.<br />Kald konfigurationsfilen direkte fra nedenstående link og læs de(n) phpfejlmeddelse(r) du får. I de fleste tilfælde mangler der et anførselstegn eller et semikolon et sted.<br />Hvis du får en blank side, er alt i orden.';
$strConfigureTableCoord = 'Konfigurér venligst koordinaterne for tabel %s';
$strConfirm = 'Ikke du sikker på at du vil gøre det?';
$strConnections = 'Forbindelser';
$strConstraintsForDumped = 'Begrænsninger for dumpede tabeller';
$strConstraintsForTable = 'Begrænsninger for tabel';
$strCookiesRequired = 'Herefter skal cookies være sat til.';
$strCopyTable = 'Kopier tabel til (database<b>.</b>tabel):';
$strCopyTableOK = 'Tabellen %s er nu kopieret til: %s.';
$strCopyTableSameNames = 'Kan ikke kopiere tabellen til den samme!';
$strCouldNotKill = 'phpMyAdmin kunne ikke dræbe tråden %s. Den er sandsynligvis allerede lukket.';
$strCreate = 'Opret';
$strCreateIndex = 'Dan et indeks på&nbsp;%s&nbsp;kolonner';
$strCreateIndexTopic = 'Lav et nyt indeks';
$strCreateNewDatabase = 'Opret ny database';
$strCreateNewTable = 'Opret ny tabel i database %s';
$strCreatePage = 'Opret en ny side';
$strCreatePdfFeat = 'Oprettelse af PDFer';
$strCreationDates = 'Oprettet/Opdateret/Check datoer';
$strCriteria = 'Kriterier';
$strCroatian = 'Kroatisk';
$strCyrillic = 'Kyrillisk';
$strCzech = 'Tjekkisk';
$strCzechSlovak = 'Tjekkisk-Slovakisk';

$strDBComment = 'Database kommentar: ';
$strDBGContext = 'Sammenhæng';
$strDBGContextID = 'Sammenhæng-ID';
$strDBGHits = 'Hits';
$strDBGLine = 'Linie';
$strDBGMaxTimeMs = 'Max tid, ms';
$strDBGMinTimeMs = 'Min tid, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Tid/Hit, ms';
$strDBGTotalTimeMs = 'Total tid, ms';
$strDanish = 'Dansk';
$strData = 'Data';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Kun data';
$strDatabase = 'Database: ';
$strDatabaseExportOptions = 'Database eksport indstillinger';
$strDatabaseHasBeenDropped = 'Database %s er slettet.';
$strDatabaseNoTable = 'Denne database indeholder ikke nogen tabel!';
$strDatabaseWildcard = 'Database (jokertegn tilladt):';
$strDatabases = 'Databaser';
$strDatabasesDropped = '%s databaser er blevet droppet korrekt.';
$strDatabasesStats = 'Database statistik';
$strDatabasesStatsDisable = 'Slå Statistikker fra';
$strDatabasesStatsEnable = 'Slå Statistikker til';
$strDatabasesStatsHeavyTraffic = 'Bemærk: At slå databasestatistikkerne til her kan forårsage tung trafik mellem webserveren og MySQL-serveren.';
$strDbPrivileges = 'Database-specifikke privilegier';
$strDbSpecific = 'database-specifik';
$strDefault = 'Standardværdi';
$strDefaultValueHelp = 'For standardværdier, indtast venligst kun en enkelt værdi, uden backslash escaping eller quotes, ud fra følgende format: a';
$strDelOld = 'Nuværende side har referencer til tabeller der ikke længere eksisterer. Vil du slette disse referencer?';
$strDelayedInserts = 'Brug forsinkede indsættelser';
$strDelete = 'Slet';
$strDeleteAndFlush = 'Slet brugerne og genindlæs privilegier bagefter.';
$strDeleteAndFlushDescr = 'Dette er den sikreste metode, men genindlæsning af privilegierne kan tage noget tid.';
$strDeleteFailed = 'Kan ikke slette!';
$strDeleteUserMessage = 'Du har slettet brugeren %s.';
$strDeleted = 'Rækken er slettet!';
$strDeletedRows = 'Slettede rækker:';
$strDeleting = 'Sletter %s';
$strDescending = 'Faldende';
$strDescription = 'Beskrivelse';
$strDictionary = 'ordbog';
$strDisabled = 'Slået fra';
$strDisplay = 'Vis';
$strDisplayFeat = 'Vis muligheder';
$strDisplayOrder = 'Rækkefølge af visning:';
$strDisplayPDF = 'Vis PDF skematik';
$strDoAQuery = 'Kør en forespørgsel på felter (jokertegn: "%")';
$strDoYouReally = 'Er du sikker på at du vil ';
$strDocu = 'Dokumentation';
$strDrop = 'Slet';
$strDropDB = 'Slet database %s';
$strDropSelectedDatabases = 'Drop (slet) valgte Databaser';
$strDropTable = 'Slet tabel';
$strDropUsersDb = 'Drop databaser der har samme navne som brugernes.';
$strDumpComments = 'Inkludér kolonnekommentarer som inline SQL-kommentarer';
$strDumpSaved = 'Dump er blevet gemt i filen %s.';
$strDumpXRows = 'Dump %s rækker startende med række %s.';
$strDumpingData = 'Data dump for tabellen';
$strDynamic = 'dynamisk';

$strEdit = 'Ret';
$strEditPDFPages = 'Redigér PDF-sider';
$strEditPrivileges = 'Ret privilegier';
$strEffective = 'Effektiv';
$strEmpty = 'Tøm';
$strEmptyResultSet = 'MySQL returnerede ingen data (fx ingen rækker).';
$strEnabled = 'Slået til';
$strEnd = 'Slut';
$strEndCut = 'SLUT KLIP';
$strEndRaw = 'SLUT RÅ';
$strEnglish = 'Engelsk';
$strEnglishPrivileges = ' NB: Navne på MySQL privilegier er på engelsk ';
$strError = 'Fejl';
$strEstonian = 'Estisk';
$strExcelEdition = 'Excel-udgave';
$strExcelOptions = 'Excel-indstillinger';
$strExecuteBookmarked = 'Udfør forespørgsel iflg. bogmærke';
$strExplain = 'Forklar SQL';
$strExport = 'Eksport';
$strExportToXML = 'Eksportér til XML-format';
$strExtendedInserts = 'Udvidede inserts';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Mislykkede forsøg';
$strField = 'Feltnavn';
$strFieldHasBeenDropped = 'Felt %s er slettet';
$strFields = 'Felter';
$strFieldsEmpty = ' Felttallet har ingen værdi! ';
$strFieldsEnclosedBy = 'Felter indrammet med';
$strFieldsEscapedBy = 'Felter escaped med';
$strFieldsTerminatedBy = 'Felter afsluttet med';
$strFileAlreadyExists = 'Filen %s findes allerede på serveren, ændr filnavn eller tillad at der overskrives.';
$strFileCouldNotBeRead = 'Filen kunne ikke læses';
$strFileNameTemplate = 'Skabelon for Filnavn';
$strFileNameTemplateHelp = 'Brug __DB__ for databasenavn, __TABLE__ for tabelnavn og %senhver strftime%s sammensætning for tidsspecifikation, extension (filefternavn) tilføjes automagisk. Al anden tekst bevares.';
$strFileNameTemplateRemember = 'husk skabelonen';
$strFixed = 'ordnet';
$strFlushPrivilegesNote = 'Bemærk: phpMyAdmin henter brugernes privilegier direkte fra MySQL\'s privilegietabeller. Indholdet af disse tabeller kan være forskelligt fra privilegierne serveren bruger hvis der er lavet manuelle ændringer i den. Hvis det er tilfældet, bør du %sgenindlæse privilegierne%s før du fortsætter.';
$strFlushTable = 'Flush tabellen ("FLUSH")';
$strFormEmpty = 'Ingen værdi i formularen !';
$strFormat = 'Format';
$strFullText = 'Komplette tekster';
$strFunction = 'Funktion';

$strGenBy = 'Genereret af';
$strGenTime = 'Genereringstidspunkt';
$strGeneralRelationFeat = 'Generelle relationsmuligheder';
$strGeorgian = 'Georgisk';
$strGerman = 'Tysk';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globale privilegier';
$strGlobalValue = 'Global værdi';
$strGo = 'Udfør';
$strGrantOption = 'Tildel';
$strGrants = 'Tildelinger';
$strGreek = 'Græsk';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'er ændret.';
$strHasBeenCreated = 'er oprettet.';
$strHaveToShow = 'Du skal vælge mindst en kolonne der skal vises';
$strHebrew = 'Hebræisk';
$strHome = 'Hjem';
$strHomepageOfficial = 'Officiel phpMyAdmin hjemmeside ';
$strHomepageSourceforge = 'Ny phpMyAdmin hjemmeside ';
$strHost = 'Vært';
$strHostEmpty = 'Der er intet værtsnavn!';
$strHungarian = 'Ungarsk';

$strId = 'ID'; 
$strIdxFulltext = 'Fuldtekst';
$strIfYouWish = 'Hvis du kun ønsker at importere nogle af tabellens kolonner, angives de med en kommasepareret felt liste.';
$strIgnore = 'Ignorer';
$strIgnoringFile = 'Ignorerer fil %s';
$strImportDocSQL = 'Importer docSQL Filer';
$strImportFiles = 'Importér filer';
$strImportFinished = 'Import færdig';
$strInUse = 'i brug';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s er blevet slettet';
$strIndexName = 'Indeks navn&nbsp;:';
$strIndexType = 'Indeks type&nbsp;:';
$strIndexes = 'Indekser';
$strInnodbStat = 'InnoDB Status';
$strInsecureMySQL = 'Din konfigurationsfil indeholder indstillinger (root og uden kodeord) som svarer til en standard MySQL priviligeret brugerkonto. Din MySQL server kører med denne standardindstilling, <u>er åben for indtrængen</u>, og du bør virkelig gøre noget ved dette sikkerhedshul.';
$strInsert = 'Indsæt';
$strInsertAsNewRow = 'Indsæt som ny række';
$strInsertNewRow = 'Indsæt ny række';
$strInsertTextfiles = 'Importer tekstfil til tabellen';
$strInsertedRowId = 'Indsat række-id:';
$strInsertedRows = 'Indsatte rækker:';
$strInstructions = 'Instruktioner';
$strInternalNotNecessary = '* En intern relation er ikke nødvendig når den også eksisterer i InnoDB.';
$strInternalRelations = 'Interne relationer';
$strInvalidName = '"%s" er et reserveret ord, du kan ikke bruge det som database-, tabel- eller feltnavn.';

$strJapanese = 'Japansk';
$strJumpToDB = 'Hop til database &quot;%s&quot;.';
$strJustDelete = 'Bare slet brugerne fra privilegietabellerne.';
$strJustDeleteDescr = 'De &quot;slettede&quot; brugere kan stadig tilgå serveren som de plejer indtil privilegierne genindlæses.';

$strKeepPass = 'Password må ikke ændres';
$strKeyname = 'Nøgle';
$strKill = 'Kill';
$strKorean = 'Koreansk';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX indstillinger';
$strLandscape = 'Liggende';
$strLatexCaption = 'Tabeloverskrift';
$strLatexContent = 'Indhold af tabel __TABLE__';
$strLatexContinued = '(fortsættes)';
$strLatexContinuedCaption = 'Fortsat tabeloverskrift';
$strLatexIncludeCaption = 'Inkluder tabeloverskrift';
$strLatexLabel = 'Mærke nøgle';
$strLatexStructure = 'Struktur for tabel __TABLE__';
$strLength = 'Længde';
$strLengthSet = 'Længde/Værdi*';
$strLimitNumRows = 'poster pr. side';
$strLineFeed = 'Linefeed: \\n';
$strLines = 'Linier';
$strLinesTerminatedBy = 'Linier afsluttet med';
$strLinkNotFound = 'Link ikke fundet';
$strLinksTo = 'Linker til';
$strLithuanian = 'Litauisk';
$strLoadExplanation = 'Den bedste metode er markeret som standard, men du kan ændre den hvis det svigter.';
$strLoadMethod = 'LOAD metode';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Tekstfilens placering';
$strLogPassword = 'Password:';
$strLogServer = 'Server'; 
$strLogUsername = 'Brugernavn:';
$strLogin = 'Login';
$strLoginInformation = 'Login Information';
$strLogout = 'Log af';

$strMIME_MIMEtype = 'MIME-type';
$strMIME_available_mime = 'Tilgængelige MIME-typer';
$strMIME_available_transform = 'Tilgængelige transformationer';
$strMIME_description = 'Beskrivelse';
$strMIME_file = 'Filnavn';
$strMIME_nodescription = 'Der er ingen beskrivelse af denne transformation.<br />Spørg venligst forfatteren, hvad %s gør.';
$strMIME_transformation = 'Browser transformation';
$strMIME_transformation_note = 'For en liste over mulige transformationsindstillinger og deres MIME-type transformationer, klik på %stransformationsbeskrivelser%s';
$strMIME_transformation_options = 'Transformationsindstillinger';
$strMIME_transformation_options_note = 'Indtast værdier for transformationsindstillinger ud fra følgende format: \'a\',\'b\',\'c\'...<br />Skulle du få brug for at indsætte en backslash ("\") eller en apostrof ("\'") i værdierne, backslash det (for eksempel \'\\\\xyz\' eller \'a\\\'b\').';
$strMIME_without = 'MIME-typer skrevet med kursiv har ikke en separat transformationsfunktion';
$strMaximumSize = 'Maksimum størrelse: %s%s';
$strMissingBracket = 'Manglende Bracket';
$strModifications = 'Rettelserne er gemt!';
$strModify = 'Ret';
$strModifyIndexTopic = 'Ændring af et indeks';
$strMoreStatusVars = 'Flere statusvariabler';
$strMoveTable = 'Flyt tabel til (database<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s er flyttet til %s.';
$strMoveTableSameNames = 'Kan ikke flytte tabellen til den samme!';
$strMultilingual = 'flersproget';
$strMustSelectFile = 'Vælg en fil du vil indsætte.';
$strMySQLCharset = 'MySQL Karaktersæt';
$strMySQLReloaded = 'MySQL genstartet.';
$strMySQLSaid = 'MySQL returnerede: ';
$strMySQLServerProcess = 'MySQL %pma_s1% kører på %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Vis tråde';
$strMySQLShowStatus = 'Vis MySQL runtime information';
$strMySQLShowVars = 'Vis MySQL system variable';

$strName = 'Navn';
$strNext = 'Næste';
$strNo = 'Nej';
$strNoDatabases = 'Ingen databaser';
$strNoDatabasesSelected = 'Ingen databaser valgt.';
$strNoDescription = 'ingen beskrivelse';
$strNoDropDatabases = '"DROP DATABASE" erklæringer kan ikke bruges.';
$strNoExplain = 'Spring over Forklar SQL';
$strNoFrames = 'phpMyAdmin er mere brugervenlig med en browser, der kan klare <b>frames</b>.';
$strNoIndex = 'Intet indeks defineret!';
$strNoIndexPartsDefined = 'Ingen dele af indeks er definerede!';
$strNoModification = 'Ingen ændring';
$strNoOptions = 'Dette format har ingen indstillinger';
$strNoPassword = 'Intet password';
$strNoPermission = 'Webserveren har ikke tilladelse til at gemme filen %s.';
$strNoPhp = 'uden PHP-kode';
$strNoPrivileges = 'Ingen privilegier';
$strNoQuery = 'Ingen SQL forespørgsel!';
$strNoRights = 'Du har ikke tilstrækkelige rettigheder til at være her!';
$strNoSpace = 'Utilstrækkeligt plads til at gemme filen %s.';
$strNoTablesFound = 'Ingen tabeller fundet i databasen.';
$strNoUsersFound = 'Ingen bruger(e) fundet.';
$strNoUsersSelected = 'Ingen brugere valgt.';
$strNoValidateSQL = 'Spring over Validér SQL';
$strNone = 'Intet';
$strNotNumber = 'Dette er ikke et tal!';
$strNotOK = 'ikke OK';
$strNotSet = 'Tabel <b>%s</b> findes ikke eller er ikke sat i %s';
$strNotValidNumber = ' er ikke et gyldigt rækkenummer!';
$strNull = 'Nulværdi';
$strNumSearchResultsInTable = '%s hit(s) i tabel <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> hit(s)';
$strNumTables = 'Tabeller';

$strOK = 'OK';
$strOftenQuotation = 'Ofte anførselstegn. OPTIONALLY betyder at kun char og varchar felter er omsluttet med det valgte "tekstkvalifikator"-tegn.'; //skal muligvis ændres
$strOperations = 'Operationer';
$strOptimizeTable = 'Optimer tabel';
$strOptionalControls = 'Valgfrit. Kontrollerer hvordan specialtegn skrives eller læses.';
$strOptionally = 'OPTIONALLY';
$strOptions = 'Indstillinger';
$strOr = 'Eller';
$strOverhead = 'Overhead';
$strOverwriteExisting = 'Overskriv eksisterende fil(er)';

$strPHP40203 = 'Du bruger PHP 4.2.3, som har en alvorlig fejl med multi-byte strenge (mbstring). Se PHP bug report 19404. Denne version af PHP kan ikke anbefales at bruge med phpMyAdmin.';
$strPHPVersion = 'PHP version';
$strPageNumber = 'Side nummer:';
$strPaperSize = 'Papirstørrelse';
$strPartialText = 'Delvise tekster';
$strPassword = 'Password';
$strPasswordChanged = 'Kodeordet for %s blev korrekt udskiftet.';
$strPasswordEmpty = 'Der er ikke angivet noget password!';
$strPasswordNotSame = 'De to passwords er ikke ens!';
$strPdfDbSchema = 'Skematik for databasen "%s" - Side %s';
$strPdfInvalidPageNum = 'Udefineret PDF sidenummer!';
$strPdfInvalidTblName = 'Tabellen "%s" findes ikke!';
$strPdfNoTables = 'Ingen tabeller';
$strPerHour = 'pr. time';
$strPerMinute = 'pr minut';
$strPerSecond = 'pr sekund';
$strPhoneBook = 'telefonbog';
$strPhp = 'Fremstil PHP-kode';
$strPmaDocumentation = 'phpMyAdmin dokumentation';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktivet SKAL være sat i konfigurationsfilen!';
$strPortrait = 'Stående';
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimary = 'Primær';
$strPrimaryKey = 'Primær nøgle';
$strPrimaryKeyHasBeenDropped = 'Primærnøglen er slettet';
$strPrimaryKeyName = 'Navnet på primærnøglen skal være... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>skal</b> være navnet på og <b>kun på</b> en primær nøgle!)';
$strPrint = 'Print';
$strPrintView = 'Vis (udskriftvenlig)';
$strPrintViewFull = 'Udskrift-visning (med fulde tekster)';
$strPrivDescAllPrivileges = 'Inkluderer alle privilegier pånær GRANT.';
$strPrivDescAlter = 'Tillader ændring af strukturen på eksisterende tabeller.';
$strPrivDescCreateDb = 'Tillader oprettelse af nye databaser og tabeller.';
$strPrivDescCreateTbl = 'Tillader oprettelse af nye tabeller.';
$strPrivDescCreateTmpTable = 'Tillader oprettelse af midlertidige tabeller.';
$strPrivDescDelete = 'Tillader sletning af data.';
$strPrivDescDropDb = 'Tillader at droppe databaser og tabeller.';
$strPrivDescDropTbl = 'Tillader at droppe tabeller.';
$strPrivDescExecute = 'Tillader kørsel af gemte procedurer; Har ingen effekt i denne MySQL-version.';
$strPrivDescFile = 'Tillader import af data fra og eksport af data til filer.';
$strPrivDescGrant = 'Tillader oprettelse af brugere og privilegier uden at genindlæse privilegie-tabellerne.';
$strPrivDescIndex = 'Tillader at skabe og droppe indeks.';
$strPrivDescInsert = 'Tillader indsættelse og erstatning af data.';
$strPrivDescLockTables = 'Tillader låsning af tabeller for nuværende tråd.';
$strPrivDescMaxConnections = 'Begrænser antallet af nye forbindelser brugeren må åbne pr time.';
$strPrivDescMaxQuestions = 'Begrænser antallet af forespørgsler brugeren må sende til serveren pr time.';
$strPrivDescMaxUpdates = 'Begrænser antallet af kommandoer som ændrer enhver tabel eller database brugeren må udføre pr time.';
$strPrivDescProcess3 = 'Tillader at dræbe andre brugeres processer.';
$strPrivDescProcess4 = 'Tillader at se komplette forespørgsler i proceslisten.';
$strPrivDescReferences = 'Har ingen effekt i denne MySQL version.';
$strPrivDescReload = 'Tillader genindlæsning af serverindstillinger og tømning af caches.';
$strPrivDescReplClient = 'Giver brugeren rettigheder til at spørge hvor Slaves / Masters er.';
$strPrivDescReplSlave = 'Nødvendigt for replikationsslaverne.';
$strPrivDescSelect = 'Tillader læsning af data.';
$strPrivDescShowDb = 'Giver adgang til den fuldstændige liste over databaser.';
$strPrivDescShutdown = 'Tillader nedlukning af serveren.';
$strPrivDescSuper = 'Tillader forbindelse, selv hvis maksimalt antal forbindelser er nået; Nødvendigt for de fleste administrative operationer som instilling af globale variabler eller dræbe andre brugeres tråde.';
$strPrivDescUpdate = 'Tillader ændring af data.';
$strPrivDescUsage = 'Ingen privilegier.';
$strPrivileges = 'Privilegier';
$strPrivilegesReloaded = 'Privilegierne blev korrekt genindlæst.';
$strProcesslist = 'Procesliste';
$strProperties = 'Egenskaber';
$strPutColNames = 'Indsæt feltnavne i første række';

$strQBE = 'Foresp. via eks.';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'Foresp. vindue';
$strQueryFrameDebug = 'Debugging information';
$strQueryFrameDebugBox = 'Aktive variabler for forespørgsels-formularen:\nDB: %s\nTabel: %s\nServer: %s\n\nNuværende variabler for forespørgsels-formularen:\nDB: %s\nTabel: %s\nServer: %s\n\nOpener placering: %s\nFrameset placering: %s.';
$strQueryOnDb = 'SQL-forespørgsel til database <b>%s</b>:';
$strQuerySQLHistory = 'SQL-historik';
$strQueryStatistics = '<b>Forespørgselsstatistikker</b>: Siden opstarten er der blevet sendt %s forespørgsler til serveren.';
$strQueryTime = 'Forepørgsel tog %01.4f sek';
$strQueryType = 'Forespørgselstype';
$strQueryWindowLock = 'Overskriv ikke denne forespørgsel fra udenfor vinduet';

$strReType = 'Skriv igen';
$strReceived = 'Modtaget';
$strRecords = 'Poster';
$strReferentialIntegrity = 'Check reference integriteten';
$strRelationNotWorking = 'De yderligere features for at arbejde med linkede tabeller er deaktiveret. For at se hvorfor, klik %sher%s.';
$strRelationView = 'Se Relationer';
$strRelationalSchema = 'Relationel skematik';
$strRelations = 'Relationer';
$strReloadFailed = 'Genstart af MySQL fejlede.';
$strReloadMySQL = 'Genstart MySQL';
$strReloadingThePrivileges = 'Genindlæs privilegierne';
$strRememberReload = 'Husk at indlæse serveren.';
$strRemoveSelectedUsers = 'Fjern valgte brugere';
$strRenameTable = 'Omdøb tabel til';
$strRenameTableOK = 'Tabellen %s er nu omdøbt til: %s';
$strRepairTable = 'Reparer tabel';
$strReplace = 'Erstat';
$strReplaceNULLBy = 'Erstat NULL med';
$strReplaceTable = 'Erstat data i tabellen med filens data';
$strReset = 'Nulstil';
$strResourceLimits = 'Ressourcebegrænsninger';
$strRevoke = 'Tilbagekald';
$strRevokeAndDelete = 'Tilbagekald alle aktive privileiger fra brugerne og slet dem efterfølgende.';
$strRevokeAndDeleteDescr = 'Brugerne vil stadig have USAGE privilegiet indtil privilegierne genindlæses.';
$strRevokeGrant = 'Tilbagekald tildeling';
$strRevokeGrantMessage = 'Du har tilbagekaldt det tildelte privilegium for %s';
$strRevokeMessage = 'Du har tilbagekaldt privilegierne for %s';
$strRevokePriv = 'Tilbagekald privilegier';
$strRowLength = 'Række længde';
$strRowSize = ' Række størrelse ';
$strRows = 'Rækker';
$strRowsFrom = 'rækker startende fra';
$strRowsModeFlippedHorizontal = 'horisontalt (roterede overskrifter)';
$strRowsModeHorizontal = 'vandret';
$strRowsModeOptions = '%s og gentag overskrifter efter %s celler';
$strRowsModeVertical = 'lodret';
$strRowsStatistic = 'Række statistik';
$strRunQuery = 'Send forespørgsel';
$strRunSQLQuery = 'Kør SQL forspørgsel(er) på database %s';
$strRunning = 'kører på %s';
$strRussian = 'Russisk';

$strSQL = 'SQL';
$strSQLExportType = 'Eksporttype';
$strSQLOptions = 'SQL indstillinger';
$strSQLParserBugMessage = 'Det er muligt at du har fundet en fejl i SQL-parseren. Undersøg venligst din forespørgsel nøje, og check at anførselstegn er rigtige og ikke giver konflikter. Andre fejlårsager kan være at du uploader en fil med binær udenfor et lukket tekstområde. Du kan også prøve din forespørgsel i MySQL kommandolinie-interfacet. MySQL-serverens fejlmelding der følger herunder, hvis der er nogen, kan også hjælpe dig med at finde problemet. HVis du stadig har probemer eller hvis parseren fejler hvor kommandolinieinterfacet lykkes, reducer din SQL-forespørgselsinput til den ene forespørgsel der forårsager problemet, og indsend en fejlrapport med datablokken i KLIP sektionen herunder:';
$strSQLParserUserError = 'Der ser ud til at være en fejl i din SQL-forespørgsel. MySQL-serverens fejlmelding der følger herunder, hvis der er nogen, kan også hjælpe dig med at finde problemet.';
$strSQLQuery = 'SQL-forespørgsel';
$strSQLResult = 'SQL resultat';
$strSQPBugInvalidIdentifer = 'Ugyldig Identifikator';
$strSQPBugUnclosedQuote = 'Ikke-lukket quote';
$strSQPBugUnknownPunctuation = 'Ukendt tegnsætnings-streng';
$strSave = 'Gem';
$strSaveOnServer = 'Gem på serveren i mappen %s ';
$strScaleFactorSmall = 'Skaleringsfaktoren er for lille til at tilpasse skematikken til en side';
$strSearch = 'Søg';
$strSearchFormTitle = 'Søg i databasen';
$strSearchInTables = 'Indeni tabel(ler):';
$strSearchNeedle = 'Ord eller værdi(er) (jokertegn: "%"):';
$strSearchOption1 = 'mindst et af ordene';
$strSearchOption2 = 'alle ordene';
$strSearchOption3 = 'den nøjagtige sætning';
$strSearchOption4 = 'som regulært udtryk';
$strSearchResultsFor = 'Søgeresultater for "<i>%s</i>" %s:';
$strSearchType = 'Find:';
$strSecretRequired = 'Konfigurationsfilen skal nu bruge et hemmeligt kodeord (blowfish_secret).';
$strSelect = 'Vælg';
$strSelectADb = 'Vælg en database';
$strSelectAll = 'Vælg alle';
$strSelectFields = 'Vælg mindst eet felt:';
$strSelectNumRows = 'i forespørgsel';
$strSelectTables = 'Vælg Tabeller';       
$strSend = 'Send (download)';
$strSent = 'Sendt';
$strServer = 'Server %s';
$strServerChoice = 'Server valg';
$strServerStatus = 'Runtime Information';
$strServerStatusUptime = 'Denne MySQL-server har kørt i %s. Den startede op den %s.';
$strServerTabProcesslist = 'Processer';
$strServerTabVariables = 'Variabler';
$strServerTrafficNotes = '<b>Servertraffik</b>: Disse tabeller viser netværkstrafik-statistikkerne for denne MySQL-server siden dens opstart.';
$strServerVars = 'Server-variabler og indstillinger';
$strServerVersion = 'Server version';
$strSessionValue = 'Sessionsværdi';
$strSetEnumVal = 'Hvis et felt er af typen "enum" eller "set", skal værdierne angives på formen: \'a\',\'b\',\'c\'...<br />Skulle du få brug for en backslash ("\") eller et enkelt anførselstegn ("\'") blandt disse værdier, så tilføj en ekstra backslash (fx \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Vis';
$strShowAll = 'Vis alt';
$strShowColor = 'Vis farve';
$strShowCols = 'Vis kolonner';
$strShowDatadictAs = 'Data Dictionary format';
$strShowFullQueries = 'Vis fuldstændige forespørgsler';
$strShowGrid = 'Vis gitter';
$strShowPHPInfo = 'Vis PHP information';
$strShowTableDimension = 'Vis tabellernes dimensioner';
$strShowTables = 'Vis tabeller';
$strShowThisQuery = ' Vis forespørgslen her igen ';
$strShowingRecords = 'Viser poster ';
$strSimplifiedChinese = 'Simplifiveret Kinesisk';
$strSingly = '(enkeltvis)';
$strSize = 'Størrelse';
$strSort = 'Sorter';
$strSortByKey = 'Sorteringsnøgle';
$strSpaceUsage = 'Pladsforbrug';
$strSplitWordsWithSpace = 'Ord adskilles af mellemrums-karakter (" ").';
$strStatCheckTime = 'Sidste check';
$strStatCreateTime = 'Oprettelse';
$strStatUpdateTime = 'Sidste opdatering';
$strStatement = 'Erklæringer';
$strStatus = 'Status';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struturen og data';
$strStrucDrop = 'Tilføj \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV til Ms Excel-data';
$strStrucOnly = 'Kun strukturen';
$strStructPropose = 'Foreslå tabelstruktur';
$strStructure = 'Struktur';
$strSubmit = 'Send';
$strSuccess = 'Din SQL-forespørgsel blev udført korrekt';
$strSum = 'Sum';
$strSwedish = 'Svensk';
$strSwitchToTable = 'Skift til den kopierede tabel';

$strTable = 'Tabel';
$strTableComments = 'Tabel kommentarer';
$strTableEmpty = 'Intet tabelnavn!';
$strTableHasBeenDropped = 'Tabel %s er slettet';
$strTableHasBeenEmptied = 'Tabel %s er tømt';
$strTableHasBeenFlushed = 'Tabel %s er blevet flushet';
$strTableMaintenance = 'Tabel vedligehold';
$strTableOfContents = 'Indholdsfortegnelse';
$strTableOptions = 'Tabel-indstillinger';
$strTableStructure = 'Struktur dump for tabellen';
$strTableType = 'Tabel type';
$strTables = '%s tabel(ler)';
$strTblPrivileges = 'Tabel-specifikke privilegier';
$strTextAreaLength = ' På grund af feltets længde,<br /> kan det muligvis ikke ændres ';
$strThai = 'Thai';
$strTheContent = 'Filens indhold er importeret.';
$strTheContents = 'Filens indhold erstatter den valgte tabels rækker for rækker med identisk primær eller unik nøgle.';
$strTheTerminator = 'Felterne afgrænses af dette tegn.';
$strThisHost = 'Denne Host';
$strThisNotDirectory = 'Dette var ikke en mappe';
$strThreadSuccessfullyKilled = 'Tråd %s blev stoppet.';
$strTime = 'Tid';
$strToggleScratchboard = 'tegnebræt til/fra';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'Traditionelt Kinesisk';
$strTraffic = 'Trafik';
$strTransformation_application_octetstream__download = 'Viser et link til at downloade et felts binære data. Første mulighed er filnavnet på den binære fil. Anden mulighed er et muligt feltnavn fra en tabelrække indeholdende filnavnet. Hvis du bruger anden mulighed, er feltet til den første mulighed nødt til at være sat til en tom streng.';
$strTransformation_image_jpeg__inline = 'Viser et klikbart minibilled; indstillinger: bredde,højde i pixel (bevarer det originale perspektiv)';
$strTransformation_image_jpeg__link = 'Viser et link til dette billede (f.eks. direkte blob download).';
$strTransformation_image_png__inline = 'Se image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Tager et TIME, TIMESTAMP eller DATETIME-felt og formatterer det til dit lokale datoformat. Første parameter er offset (i timer) som lægges til tidsstemplet (Default: 0). Andte parameter er et andet datoformat ud fra PHPs strftime() definition.';
$strTransformation_text_plain__external = 'KUN LINUX: Starter en ekstern applikation og føder feltdata via standard input. Returnerer standardoutputtet for applikationen. Default er Tidy, for korrekt printet HTML-kode. Af sikkerhedsårsager er du nødt til manuelt at redigere filen libraries/transformations/text_plain__external.inc.php og indsætte de værktøjer du vil tillade kørsel af. Første indstilling er så nummeret på det program du vil bruge og den anden indstilling er parametrene for det program. Tredie parameter, hvis sat til 1 vil konvertere outputtet vha. htmlspecialchars() (Default er 1). Et fjerde parameter, hvis sat til 1 vil sætte et NOWRAP om cellens indhold så hele outputtet bliver vist uden omformattering (Default 1)';
$strTransformation_text_plain__formatted = 'Bevarer original formattering af feltet. Der laves ikke nogen Escaping.';
$strTransformation_text_plain__imagelink = 'Viser et billed og et link, feltet indeholder filnavnet; første indstilling er et præfiks som "http://domain.com/", anden indstilling er bredde i pixel, tredie er højden.';
$strTransformation_text_plain__link = 'Viser et link, feltet indeholder filnavnet; første indstilling er et præfiks som "http://domain.com/", anden indstilling er en titel på linket.';
$strTransformation_text_plain__substr = 'Viser kun en del af en streng. Første parameter er en offset for at definere hvor outputtet af din tekst starter (Default 0). Andet parameter er en offset for hvor meget tekst der returneres. Hvis tom returneres den tilbageværende tekst. Det tredie parameter definerer hvilke karakterer der skal føjes til outputtet når en substring (understreng) returneres (Default: ...) .';
$strTransformation_text_plain__unformatted = 'Viser HTML-kode som HTML-enheder. Der vises ingen HTML-formattering.';
$strTruncateQueries = 'Trunkér viste forespørgsler';
$strTurkish = 'Tyrkisk';
$strType = 'Datatype';                

$strUkrainian = 'Ukrainsk';
$strUncheckAll = 'Fjern alle mærker';
$strUnicode = 'Unicode';
$strUnique = 'Unik';
$strUnknown = 'ukendt';
$strUnselectAll = 'Fravælg alle';
$strUpdComTab = 'Se venligst Dokumentationen for oplysninger om hvordan du opdatere din Column_comments tabel';
$strUpdatePrivMessage = 'Du har opdateret privilegierne for %s.';
$strUpdateProfile = 'Opdater profil:';
$strUpdateProfileMessage = 'Profilen er blevet opdateret.';
$strUpdateQuery = 'Opdater forespørgsel';
$strUpgrade = 'Du burde opdatere til %s %s eller senere.';
$strUsage = 'Benyttelse';
$strUseBackquotes = 'Brug \'backquotes\' på tabellers og felters navne';
$strUseHostTable = 'Brug Host Tabel';
$strUseTables = 'Benyt tabeller';
$strUseTextField = 'Brug tekstfelt';
$strUseThisValue = 'Brug denne værdi';
$strUser = 'Bruger';
$strUserAlreadyExists = 'Brugeren %s findes i forvejen!';
$strUserEmpty = 'Intet brugernavn!';
$strUserName = 'Brugernavn';
$strUserNotFound = 'Den valgte bruger blev ikke fundet i privilegietabellen.';
$strUserOverview = 'Brugeroversigt';
$strUsers = 'Brugere';
$strUsersDeleted = 'De valgte brugere er blevet korrekt slettet.';
$strUsersHavingAccessToDb = 'Brugere med adgang til &quot;%s&quot;';

$strValidateSQL = 'Validér SQL';
$strValidatorError = 'SQL-validatoren kunne ikke initialiseres. Check venligst at du har de nødvendige php-udvidelser installeret som beskrevet i %sdokumentationen%s.';
$strValue = 'Værdi';
$strVar = 'Variabel';
$strViewDump = 'Vis dump (skema) over tabel';
$strViewDumpDB = 'Vis dump (skema) af database';
$strViewDumpDatabases = 'Vis dump (skema) for databaser';

$strWebServerUploadDirectory = 'web-server upload mappe';
$strWebServerUploadDirectoryError = 'Mappen du har sat til upload-arbejde kan ikke findes';
$strWelcome = 'Velkommen til %s';
$strWestEuropean = 'Vesteuropæisk';
$strWildcard = 'jokertegn';
$strWindowNotFound = 'Det angivne browservindue kunne ikke opdateres. Måske har du lukket det overliggende vindue eller din browser blokerer for tvær-vindue opdateringer i sikkerhedsindstillingerne';
$strWithChecked = 'Med det markerede:';
$strWritingCommentNotPossible = 'Skrivning af kommentar ikke muligt';
$strWritingRelationNotPossible = 'Skrivning af relation ikke muligt';
$strWrongUser = 'Forkert brugernavn/kodeord. Adgang nægtet.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Bemærk: Indstilling af disse værdier til 0 (nul) fjerner begrænsningen.';
$strZip = '"zipped"';

// To translate:

$strConnectionError = 'Cannot connect: invalid settings.';  //to translate

$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDBRename = 'Rename database to';  //to translate
?>
