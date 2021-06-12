-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 04:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) NOT NULL,
  `naslov` varchar(64) NOT NULL,
  `sazetak` text NOT NULL,
  `tekst` text NOT NULL,
  `slika` varchar(64) NOT NULL,
  `kategorija` varchar(64) NOT NULL,
  `arhiva` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(11, '13.05.2021.', 'Jeste spremni za ovo? Low carb lava cake!', 'Zatvorite oči i zamislite lava cake. Žlicu nježno zabadate u kolač, on probija koru i iz kolača kreće curiti slasna čokolada. Divno, zar ne? E sad zamislite ovo, pred vama je low carb lava cake! ', 'Moguće je samo kod nas!\r\n\r\nPred vama je još jedan omiljeni desert interpretiran na naš, zdraviji način. Jednostavan i topao čokoladni desert sa slatkim “srcem” od tekuće čokolade, a bez brašna i šećera… može li bolje?\r\n\r\nSastojci (za 3-4 ramekina):\r\n70 g tamne čokolade bez šećera (naruči ovdje)\r\n60 g kokosovog ulja (naruči ovdje)\r\n1/4 žličice arome vanilije (naruči ovdje)\r\n3 jaja\r\nPrstohvat himalajske soli (naruči ovdje)\r\nKokosovo ulje za mašćenje kalupa (naruči ovdje)\r\n\r\nPriprema:\r\nČokoladu nasjeckajte na manje komadiće te otopite na pari zajedno s kokosovim uljem. Čim su se čokolada i kokosovo ulje otopili, maknite s vatre i umiješajte aroma vanilije. Ostavite da se prohladi barem 15 minuta, često miješajući pjenjačom. Smjesa se mora ohladiti, ali ne i stvrdnuti. Pećnicu upalite na 200°C.\r\nDok se čokolada hladi, kokosovim uljem namastite male ramekine (keramičke posudice za pečenje promjera oko 7 cm).\r\nJaja miksajte mikserom oko 2-3 minute, dok ne postanu pjenasta. Dodajte mali prstohvat himalajske soli. Zatim ugasite mikser, te kuhačom umiješajte i prohlađenu otopljenu čokoladu.\r\nKad se smjesa dobro povezala, ulijte ju u ramekine tako da smjese u svakom ramekinu bude gotovo do vrha. Stavite u ugrijanu pećnicu, te odmah smanjite temperaturu pečenja na 175°C. Pecite oko 7-8 minuta, tako da se gornji dio kolača ščvrsne, a sredina ostane tekuća. Izvadite iz pećnice pa ostavite par minuta da se prohladi.\r\nPoslužite toplo, uz dodatak šumskog voća po želji.', 'lavaCake.jpg', 'Fit', 0),
(8, '13.05.2021.', 'Vaterpoliste Juga još jedna pobjeda dijeli od obrane naslova prv', 'VATERPOLISTI Jug Adriatic osiguranja poveli su 2:0 u finalnoj seriji doigravanja Prvenstva Hrvatske jer su u Zagrebu pobijedili Mladost 10:8 (2:2, 2:2, 3:1, 3:3) i tako napravili veliki korak prema obrani naslova prvaka.', 'Podsjetimo, u prvom susretu finala doigravanja Jug AO je pobijedio Mladost 12:9, a nakon današnje pobjede jugaše samo još jedna pobjeda dijeli do 17. naslova prvaka Hrvatske.\r\n\r\nTreća finalna utakmica na rasporedu je u srijedu 19. svibnja u Dubrovniku.\r\n\r\nNakon izjednačene igre u prve dvije četvrtine (4:4) igrači trenera Vjekoslava Kobešćaka su dobili treću dionicu 3:1, što se pokazalo ključnim jer je i posljednja četvrtina završila bez pobjednika (3:3).\r\n\r\nStrijelce Juga predvodio je Paulo Obradović s tri postignuta pogotka, dva su zabili Alex Papanastasiou i Luka Lončar, te po jedan Loren Fatović, Xavi Garcia i Hrvoje Benić. Odličan je na vratima Juga bio Toni Popadić s osam obrana.\r\n\r\nKod Mladosti najefikasniji su bili Konstantin Karkov, Andro Bušlje i Franko Lazić s po dva gola, a među strijelce su se upisali i Matias Biljaka i Luka Bajić.\r\n\r\nPrije početka zagrebačkog ogleda upriličena je prigodna svečanost. Naime, proslavljeni bivši vaterpolski sudac Željko Klarić primio je Trofej HVS-a.\r\n\r\nRiječ je o najvišem godišnjem priznanju Hrvatskog vaterpolskog saveza, a koje se dodjeljuje pojedincima koji su tijekom svoje igračke, trenerske, sudačke ili dužnosničke karijere ostvarili osobit trag i ostavili dubok pečat u hrvatskom vaterpolu.\r\n\r\nKlarić je tri desetljeća bio međunarodni vaterpolski sudac te je pravdu dijelio na čak pet olimpijskih igara, jednako toliko svjetskih prvenstava, devet europskih prvenstava, na po četiri Svjetska ili FINA kupa i Univerzijade, na troje Mediteranskih igara i šest finala Kupa/Lige prvaka. \r\n\r\nTrofej HVS-a Klariću je uručio Milivoj Bebić, povjerenik za natjecanje Hrvatskog vaterpolskog saveza.\r\n\r\nZnate li nešto više o temi ili želite prijaviti grešku u tekstu?', 'mladost-jug.jpg', 'Sport', 0),
(7, '13.05.2021.', 'Rode se vracaju', 'Gdje su rodesada?', 'Rode su na outu doma!Jos malo pa stižu u Zagreb.jeeeeeeeeeeeee', 'roda.jpg', 'Ljubimci', 0),
(10, '13.05.2021.', 'Hrvatski rukometaši saznali kad igraju s Francuskom, Srbijom i U', 'EUROPSKA rukometna federacija objavila je u utorak na svojima stranicama satnicu odigravanja utakmica na Europskom prvenstvu koje se održava od 13. do 30. siječnja sljedeće godine u Mađarskoj i Slovačkoj.', 'Prvenstvo službeno otvara utakmica skupine B između Mađarske i Nizozemske u Budimpešti 13. siječnja s početkom u 20:30 sati.\r\n\r\nHrvatska rukometna reprezentacija se nalazi u skupini C s Francuskom, Srbijom i Ukrajinom, a utakmice grupne faze se igraju u Szegedinu.\r\n\r\nHrvatski rukometaši prvu utakmicu igraju 13. siječnja protiv Francuske u 20:30. Drugu utakmicu u skupini Hrvatska igra protiv Srbije dva dana kasnije, također s početkom u 20:30. Ukrajina je zadnji hrvatski suparnik u skupini, a s njom će snage odmjeriti 17. siječnja u 18 sati.\r\n\r\nSkupinu A čine Slovenija, Danska, Sjeverna Makedonija i Crna Gora, skupinu B čine Portugal, Mađarska, Island i Nizozemska, u skupini D su Njemačka, Austrija, Bjelorusija i Poljska, u skupini E Španjolska, Švedska, Češka i Bosna i Hercegovina a u skupini F Norveška, Rusija, Slovačka i Litva.\r\n\r\nPolufinalne utakmice su na rasporedu 28. siječnja od 18 i 20.30, dok se finale igra 30. siječnja u 18 sati u Budimpešti.\r\n\r\nZnate li nešto više o temi ili želite prijaviti grešku u tekstu?', 'rukomet.jpg', 'Sport', 0),
(12, '25.05.2021.', 'Mačka po prvi put upoznala bebu, nije mogla skrivati šok', '							  							  							  							  							  							  							  							  							  							  							  							  							  							  							  							  							  							  JEDNA mačka nije mogla skrivati svoj šok kada je po prvi put ugledala novorođenče u svojoj kući.																																																																																																												', '																																																																																																																														Vlasnica je snimila trenutak njihovog upoznavanja, a u videu se može vidjeti kako mačka zbunjeno stoji naslonjena na kauč i proučava bebu, kao da ne može vjerovati svojim očima.\r\n\r\nVideo je u samo 24 sata prikupio gotovo pola milijuna pregleda i mnoštvo komentara oduševljenih korisnika.\r\n\"Ovakvu reakciju je imala i moja mačka\", poručila je komentatorica.\r\n\r\n\"Vjerojatno pokušava shvatiti je li beba opasna\", našalila se druga.\r\n\r\n\"Prekrasne su\", napisala je treća.																																																																																																												', 'macka.PNG', 'Ljubimci', 1),
(13, '25.05.2021.', 'Prijateljstvo bebe i zlatne retriverice otopit će i najtvrđa src', 'ZLATNA retriverica Minny nije skrivala sreću kada je u njen dom stigla beba Halle.', 'Njih dvije odmah su postale nerazdvojne, a Minny je ulogu \"starije sestre\" shvatila veoma ozbiljno.\r\n\r\nVlasnici, odnosno roditelji djevojčice, odlučili su kamerom zabilježiti njihove trenutke te su otvorili TikTok profil na kojem su počeli objavljivati preslatka videa.\r\n\r\nU jednom od videa, koji je postao viralni hit i koji je prikupio više od 28 milijuna pregleda, može se vidjeti njihov prvi susret te zajedničko odrastanje, a komentatori nisu skrivali koliko ih njihov odnos oduševljava.', 'pas.PNG', 'Ljubimci', 1),
(14, '25.05.2021.', 'Žena na korgija stavila kameru kako bi snimila kako izgleda svij', 'NA INTERNETU postoji puno snimki koje prikazuju kako izgleda život pasa kroz oči čovjeka.', 'No jeste li se zapitali kako svijet oko sebe vide psi? To je zanimalo vlasnicu korgija Maxine pa je na svoju ljubimicu privezala malu kameru kako bi dobila odgovor na to pitanje.\r\n\r\nNa početku snimke se vidi kako izgleda kamera privezana na malog psića, a potom Maxine kreće u šetnju. Trči parkom, njuši četveronožne prijatelje koje susreće i igra se s njima.\r\n\r\nPogledajte sami kako izgleda svijet kroz oči psa.', 'corgi.PNG', 'Ljubimci', 0),
(15, '25.05.2021.', 'Medvjedić zalutao u Montreal pa nekoliko sati \"pravio nered\" po ', 'MLADUNČE crnog medvjeda u nedjelju je nekoliko sati \"pravilo nered\" u predgrađu Montreala', 'Policija, koja je pozvana rano poslijepodne nakon što su lokalni stanovnici u dvorištu ispred stambene zgrade zamijetili mladunče staro tek nekoliko mjeseci, ogradila je nekoliko ulica u Dorvalu, općini smještenoj zapadno od zračne luke Montreal, rekao je glasnogovornik policije Raphael Bergeron.\r\n\r\nStanovnike su zamolili da do daljnjega ostanu u svojim domovima, a u međuvremenu je više desetaka policajaca, vatrogasaca, zaposlenika ministarstva okoliša i volontera udruge Sauvetage Animal Rescue tragalo za medvjedićem.\r\n\r\nBergeron je rekao da je mladunac isprva bio zarobljen u dvorištu stambene zgrade, a potom se uspeo na stablo.\r\n\r\n\"Lokalni su lovočuvari upotrijebili posebne puške da bi mu iz daljine dali čak tri doze sedativa, no medvjedića nisu uspjeli uspavati pa se spustio s drveta te pobjegao u drugo dvorište\", stoji u FB objavi udruge Animal Rescue.', 'medo.PNG', 'Ljubimci', 0),
(16, '25.05.2021.', 'Čovjek skočio u vodu i spasio svog psa od napada aligatora', 'STANOVNIK Floride Mike McCoy šetao je sa svojim osmomjesečnim psom Jackom pored jezera u blizini srednje škole kad se niotkuda pojavio aligator.', 'Aligator je pokušavao povući Jacka pod vodu, a tada je Mike učinio sve što je mogao kako bi spasio svog psa. Skočio je u vodu.\"Prethodno sam čitao o svom okruženju i aligatorima. Obišao sam ga, lupio ga u oko i izvukao na površinu vode kako ne bi mogao pobjeći nikuda dok ne pusti mog psa\", rekao je Mike McCoy za ABC Action News. \r\n\r\nVlasnik i njegov pas zadobili su šavove, ali su dobro. Nakon ovog incidenta povjerenstvo za ribu i divlje životinje na Floridi radi na preseljenju aligatora u sigurnije okruženje.', 'aligatorPas.PNG', 'Ljubimci', 0),
(17, '25.05.2021.', 'Danas je Svjetski dan pčela, a u ovoj susjednoj nam zemlji se po', 'VJETSKI dan pčela, koji je 2017. proglasila organizacija UN-a, posebno se danas obilježava u Sloveniji', 'To je ujedno i dan rođenja Antona Janše, slikara i jednog od pionira suvremenih pčelarskih tehnika. Janša se rodio 20. svibnja 1734. u Breznici na Gorenjskem, a umro je 13. rujna 1773. u Beču.\r\n\r\nKao učitelj pčelarstva na posebnoj pčelarskoj školi, koju je osnovala carica Marija Terezija, djelovao je kao pedagog, ali i pčelar praktičar. Napisao je prve udžbenike za pčelarstvo i opisao život pčela, koje je nazvao \"najmarljivijim i najkorisnijim bićima koje je stvorio Bog\".\r\n\r\nU Sloveniji se pčelarstvom bavi oko 10 tisuća pčelara. Dosta ih se bavi i proizvodnjom ekološkog meda. Zadnjih godina potiče se i ideja o organiziranju \"medenih putova\", odnosno turističkih tura s upoznavanjem pčelarske tradicije.\r\n\r\nU najboljim godinama proizvodnja meda u Sloveniji je dosezala i 2500 tona, ali je zbog klimatskih promjena i lošijih vremenskih uvjeta za pčele ona u stalnom padu, pa se sada godišnje proizvede između 500 i tisuću tona, a dio meda se i uvozi.\r\n\r\nPčelare u Sloveniji danas očekuje niz proslava i stručnih savjetovanja, a bit će predstavljena i nagrada Zlatna pčela, koju će vlada ubuduće dodjeljivati za izuzetne uspjehe na svjetskoj razini u zaštiti pčela i drugih oprašivača.', 'pcele.PNG', 'Ljubimci', 0),
(18, '25.05.2021.', 'Hrvatski karatisti prvaci Europe', 'HRVATSKA muška karate reprezentacija osvojila je povijesnu ekipnu zlatnu medalju na Europskom prvenstvu u Poreču.', 'Hrvatska je u finalu s glatkih 3:0 pobijedila Crnu Goru i tako ostvarila najveći uspjeh u povijesti hrvatskog karatea. Anđelo Kvesić i Ivan Martinac su dobili svoje borbe, a protivnici su jednu borbu predali zbog ozljede.\r\n\r\n\"Presretni smo. Imali smo visoka očekivanja od ovog turnira, ali zlato je ostvarenje sna. Sigurno ćemo ovo dobro proslaviti. Malo mi je žao što sam izgubio borbu za brončanu medalju, ali dolaze Olimpijske igre i vjerujem da mogu osvojiti zlato\", rekao je član momčadi Ivan Kvesić nakon pobjede.\r\n\r\nHrvatski karatisti su na Europskom prvenstvu ostvarili odlične rezultate. Enes Garibović osvojio je broncu u svojoj kategoriji u pojedinačnoj konkurenciji, a ženska reprezentacija je također osvojila brončanu medalju.', 'karate.PNG', 'Sport', 0),
(19, '26.05.2021.', 'Dječak zagrlio zlatnog retrivera, a on mu je uzvratio na dirljiv', 'PSI su ljudima najbolji prijatelji. To dokazuje i maleni dječak koji obožava svog zlatnog retrivera i obrnuto.', 'Na TikToku se pojavila snimka koja pokazuje koliko je ljubav između njih dvojice snažna.\r\n\r\nDječak je prišao svom ljubimcu te ga zagrlio. Nakon par sekundi ga je pustio i prišao stolu, a retriver ga je u tom trenutku s leđa obujmio šapama te ga čvrsto zagrlio.\r\n\r\n\"On uvijek vraća zagrljaje\", opis je dirljive snimke koja je u jednom danu pregledana 7.9 milijuna puta. \r\n\"Ovo je nešto najbolje što sam ikad vidjela\", napisala je jedna korisnica te društvene mreže.', 'retriver.PNG', 'Ljubimci', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE `kategorije` (
  `id` int(11) NOT NULL,
  `naziv` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`id`, `naziv`) VALUES
(1, 'Ljubimci'),
(2, 'Sport'),
(3, 'Fit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) COLLATE utf8mb4_croatian_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8mb4_croatian_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_croatian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_croatian_ci NOT NULL,
  `razina` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ime`, `prezime`, `username`, `password`, `razina`) VALUES
(1, 'Marina', 'Bekavac', 'Maze95', '$2y$10$XxIgyKdlTBI.nHNRhQqC5.sQF3k/YPHk2NwpEFFv3j1tq7vnN5GzO', 0),
(2, 'Marina', 'Bekavac', 'Admin', '$2y$10$N8zaqR/vaIx5cK.Z7n8FpOUNHMHPJF14P6CwLmpMyao.ULTMyC2r6', 1),
(3, 'Marina', 'Bekavac', 'Maze1995', '$2y$10$3BHI2EJ7QYo/MhG5j7MWOO5RBENm7de3ynh6ftoKDmw9sN9dYLlZi', 0),
(4, 'Marina', 'Bekavac', 'Maze13', '$2y$10$235ABedE9zWn3TN7Cc1PcuyVLaSZnHu7xYpg7WN6oJt/HsVpV7D9i', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kategorije`
--
ALTER TABLE `kategorije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
