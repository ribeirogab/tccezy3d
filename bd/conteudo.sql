USE batata;

DROP TABLE IF EXISTS conteudo;

CREATE TABLE conteudo
(
	apelido VARCHAR(30),
	pagina VARCHAR(30),
	CONSTRAINT id PRIMARY KEY(apelido, pagina),
	pt TEXT,
	en TEXT,
	es TEXT
);

INSERT INTO conteudo
VALUES
	--  MENU =============================================
	("item0", "menu",
		"Inicio",
		"Home",
		"Primero"),

	("item1", "menu",
		"Impressoras 3D",
		"3D Printers",
		"Impresoras 3D"),

	("printer1", "menu",
		"E1260T",
		"E1260T",
		"E1260T"),
	("printer2", "menu",
		"Phylos",
		"Phylos",
		"Phylos"),
	("printer3", "menu",
		"Core E3",
		"Core E3",
		"Core E3"),


	("item2", "menu",
		"Acessórios",
		"Accessories",
		"Accesorios"),

	("acessorio1", "menu",
		"EzyCure",
		"EzyCure",
		"EzyCure"),


	("item3", "menu",
		"Aplicações",
		"Applications",
		"Aplicaciones"),

	("aplicacao1", "menu",
		"Odontologia",
		"Dentistry",
		"Odontología"),

	("aplicacao2", "menu",
		"Manufatura",
		"Manufacturing",
		"Manufactura"),

	("aplicacao3", "menu",
		"Educação",
		"Education",
		"Educación"),

	("aplicacao4", "menu",
		"Joalheria",
		"Jewelry",
		"Joyas"),


	("item4", "menu",
		"Contato",
		"Contact",
		"Contacto"),


	("logar", "menu",
		"Logar",
		"Log in",
		"Entrar"),


	("cadastrar", "menu",
		"Cadastrar",
		"Register",
		"Registro"),

	("perfil", "menu",
		"Perfil",
		"Profile",
		"Perfil"),

	("sair", "menu",
		"Sair",
		"Log out",
		"Cerrar sesión"),

	("idiomas", "menu",
		"Português",
		"English",
		"Español"),

	("loginmodal_email", "menu",
		"E-mail",
		"Email",
		"E-mail"),

	("loginmodal_senha", "menu",
		"Senha",
		"Password",
		"Contraseña"),

	("loginmodal_logar", "menu",
		"Logar",
		"Log in",
		"Acceder"),

	("loginmodal_erro1", "menu",
		"Senha ou e-mail incorreto(s).",
		"Incorrect password or email (s).",
		"Contraseña o e-mail incorrecto (s)."),

	("loginmodal_erro2", "menu",
		"Insira as informações corretamente.",
		"Enter the information correctly.",
		"Introduzca la información correctamente."),

	-- RODAPE ============================================
	("rdp_comocomprar", "rodape",
		"Como comprar",
		"How to buy",
		"Como comprar"),

	("rdp_contato", "rodape",
		"Contato",
		"Contact",
		"Contacto"),

	("rdp_suporteaocliente", "rodape",
		"Suporte ao cliente",
		"Customer support",
		"Soporte al cliente"),

	("rdp_titulo1", "rodape",
		"EZY 3D",
		"EZY 3D",
		"EZY 3D"),

	("rdp_txt1", "rodape",
		"Uma empresa para o que você pode precisar, da prototipagem do website à publicação",
		"A company for whatever you may need, from website prototyping to publishing",
		"Una empresa para lo que necesite, desde prototipos de sitios web hasta publicaciones."),

	("rdp_titulo2", "rodape",
		"Site",
		"Site",
		"Sitio"),

	("rdp_titulo3", "rodape",
		"Contato",
		"Contact",
		"Contacto"),

	("rdp_item1", "rodape",
		"+246 - 542 550 5462",
		"+246 - 542 550 5462",
		"+246 - 542 550 5462"),

	("rdp_item2", "rodape",
		"info@pingendo.com",
		"info@pingendo.com",
		"info@pingendo.com"),

	("rdp_item3", "rodape",
		"365 Park Street, NY",
		"365 Park Street, NY",
		"365 Park Street, NY"),

	("rdp_titulo4", "rodape",
		"Newsletter",
		"Newsletter",
		"Newsletter"),

	("rdp_txt4", "rodape",
		"Receber atualizações",
		"Get Updates",
		"Recibir actualizaciones"),

	("rdp_button1", "rodape",
		"Enviar",
		"Submit",
		"Enviar"),

	("rdp_copy", "rodape",
		" | EZY3D Printing",
		" | EZY3D Printing",
		" | EZY3D Printing"),


	-- HOME ==============================================
	("titulo1", "home",
		"Outra manchete",
		"Another headline",
		"Otro titular"),

	("txt1", "home",
		"E um subtítulo ainda mais whittier.",
		"And an even wittier subheading.",
		"Y un subtítulo aún más blando."),

	("titulo2", "home",
		"Outra manchete",
		"Another headline",
		"Otro titular"),

	("txt2", "home",
		"E um subtítulo ainda mais whittier.",
		"And an even wittier subheading.",
		"Y un subtítulo aún más blando."),

	("titulo3", "home",
		"Outra manchete",
		"Another headline",
		"Otro titular"),

	("txt3", "home",
		"E um subtítulo ainda mais whittier.",
		"And an even wittier subheading.",
		"Y un subtítulo aún más blando."),

	("titulo4", "home",
		"Outra manchete",
		"Another headline",
		"Otro titular"),

	("txt4", "home",
		"E um subtítulo ainda mais whittier.",
		"And an even wittier subheading.",
		"Y un subtítulo aún más blando."),

	("titulo5", "home",
		"Eu sinto o encanto da existência neste ponto.",
		"I feel the charm of existence in this spot.",
		"Siento el encanto de la existencia en este lugar."),



	-- PRINTER_E1260T ==============================================
	("titulo1", "printer_e1260t",
		"E1260T",
		"E1260T",
		"E1260T"),

	("txt1", "printer_e1260t",
		"Pingendo para apps e techies",
		"Pingendo for apps and techies",
		"Pinging para aplicaciones y técnicos"),

	("button1", "printer_e1260t",
		"Secondary1",
		"Secundário1",
		"Secundario1"),

	("button2", "printer_e1260t",
		"Secondary2",
		"Secundário2",
		"Secundario2"),

	("titulo2", "printer_e1260t",
		"O my friend",
		"O my friend",
		"O my friend"),

	("txt2", "printer_e1260t",
		"PT - A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.",
		"EN - A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.",
		"ES - A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot."),

	("txt2_1", "printer_e1260t",
		"PT - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.",
		"EN - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.",
		"ES - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper."),

	("txt2_2", "printer_e1260t",
		"PT - My friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power.",
		"EN - My friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power.",
		"ES - My friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power."),

	("titulo3", "printer_e1260t",
		"PT - I enjoy with my whole heart",
		"EN - I enjoy with my whole heart",
		"ES - I enjoy with my whole heart"),

	("txt3", "printer_e1260t",
		"PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.",
		"EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.",
		"ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world."),

	("titulo4", "printer_e1260t",
		"PT - Features from the future",
		"EN - Features from the future",
		"ES - Features from the future"),


	("titulo_especificacao1", "printer_e1260t",
		"PT - Responsive design",
		"EN - Responsive design",
		"ES - Responsive design"),

	("txt_especificacao1", "printer_e1260t",
		"PT - Based on fluid design principles. Works with any screen resolution",
		"EN - Based on fluid design principles. Works with any screen resolution",
		"ES - Based on fluid design principles. Works with any screen resolution"),

	("titulo_especificacao2", "printer_e1260t",
		"PT - Customized settings",
		"EN - Customized settings",
		"ES - Customized settings"),

	("txt_especificacao2", "printer_e1260t",
		"PT - Choose settings depending on the criteria you value the most. With no limits.",
		"EN - Choose settings depending on the criteria you value the most. With no limits.",
		"ES - Choose settings depending on the criteria you value the most. With no limits."),

	("titulo_especificacao3", "printer_e1260t",
		"PT - Connect",
		"EN - Connect",
		"ES - Connect"),

	("txt_especificacao3", "printer_e1260t",
		"PT - In-app chat panel 24/7 active. The support you need, right there",
		"EN - In-app chat panel 24/7 active. The support you need, right there",
		"ES - In-app chat panel 24/7 active. The support you need, right there"),

	("titulo_especificacao4", "printer_e1260t",
		"PT - Battery-friendly",
		"EN - Battery-friendly",
		"ES - Battery-friendly"),

	("txt_especificacao4", "printer_e1260t",
		"PT - Non consuming background operation for longer mobile life",
		"EN - Non consuming background operation for longer mobile life",
		"ES - Non consuming background operation for longer mobile life"),

	("titulo_especificacao5", "printer_e1260t",
		"PT - Multilayers",
		"EN - Multilayers",
		"ES - Multilayers"),

	("txt_especificacao5", "printer_e1260t",
		"PT - Work simultaneously on different panels with the switcher",
		"EN - Work simultaneously on different panels with the switcher",
		"ES - Work simultaneously on different panels with the switcher"),

	("titulo_especificacao6", "printer_e1260t",
		"PT - Share the love",
		"EN - Share the love",
		"ES - Share the love"),

	("txt_especificacao6", "printer_e1260t",
		"PT - Help us spreading the word. Tell your friends with just one-click",
		"EN - Help us spreading the word. Tell your friends with just one-click",
		"ES - Help us spreading the word. Tell your friends with just one-click"),


	("button3", "printer_e1260t",
		"PT - Do something bold",
		"EN - Do something bold",
		"ES - Do something bold"),

	("titulo5", "printer_e1260t",
		"PT - Do not procrastinate. Act",
		"EN - Do not procrastinate. Act",
		"ES - Do not procrastinate. Act"),


	-- PRINTER_PHYLOS ==============================================
	("titulo1", "printer_phylos",
		"PT - Heading 1",
		"EN - Heading 1",
		"ES - Heading 1"),

	("txt1", "printer_phylos",
		"PT - Paragraph. Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing.",
		"EN - Paragraph. Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing.",
		"ES - Paragraph. Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing."),

	("titulo2", "printer_phylos",
		"PT - A wonderful serenity",
		"EN - A wonderful serenity",
		"ES - A wonderful serenity"),

	("txt2", "printer_phylos",
		"PT - Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.",
		"EN - Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.",
		"ES - Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart."),

	("txt2_1", "printer_phylos",
		"PT - Choose an option",
		"EN - Choose an option",
		"ES - Choose an option"),

	("titulo3", "printer_phylos",
		"PT - I enjoy with my whole heart",
		"EN - I enjoy with my whole heart",
		"ES - I enjoy with my whole heart"),

	("txt3", "printer_phylos",
		"PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.",
		"EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.",
		"ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world."),

	("titulo4", "printer_phylos",
		"PT - I lie close to the earth",
		"EN - I lie close to the earth",
		"ES - I lie close to the earth"),

	("titulo4_1", "printer_phylos",
		"PT - One",
		"EN - One",
		"ES - One"),

	("txt4_1", "printer_phylos",
		"PT - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.",
		"EN - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.",
		"ES - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper."),


	("titulo4_2", "printer_phylos",
		"PT - Two",
		"EN - Two",
		"ES - Two"),

	("txt4_2", "printer_phylos",
		"PT - So full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!",
		"EN - So full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!",
		"ES - So full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!"),


	("titulo4_3", "printer_phylos",
		"PT - Three",
		"EN - Three",
		"ES - Three"),

	("txt4_3", "printer_phylos",
		"PT - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!",
		"EN - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!",
		"ES - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!"),


	("titulo5", "printer_phylos",
		"PT - Call your visitors to act. Now",
		"EN - Call your visitors to act. Now",
		"ES - Call your visitors to act. Now"),

	("button1", "printer_phylos",
		"PT - Get your license",
		"EN - Get your license",
		"ES - Get your license"),



	-- PRINTER_CORE E3 ==============================================
	("titulo1", "printer_coree3",
		"PT - I enjoy with my whole heart",
		"EN - I enjoy with my whole heart",
		"ES - I enjoy with my whole heart"),

	("txt1", "printer_coree3",
		"PT - I am alone, and feel the charm of existence in this spot.",
		"EN - I am alone, and feel the charm of existence in this spot.",
		"ES - I am alone, and feel the charm of existence in this spot."),

	("titulo2", "printer_coree3",
		"PT - Indescribable forms",
		"EN - Indescribable forms",
		"ES - Indescribable forms"),

	("txt2", "printer_coree3",
		"PT - And yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface.",
		"EN - And yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface.",
		"ES - And yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface."),

	("titulo3", "printer_coree3",
		"PT - We are not alone",
		"EN - We are not alone",
		"ES - We are not alone"),

	("txt3", "printer_coree3",
		"PT - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!",
		"EN - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!",
		"ES - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!"),

	("card_titulo1", "printer_coree3",
		"PT - Johann Goethe1",
		"EN - Johann Goethe1",
		"ES - Johann Goethe1"),

	("card_p1", "printer_coree3",
		"PT - CEO & Founder1",
		"EN - CEO & Founder1",
		"ES - CEO & Founder1"),

	("card_titulo2", "printer_coree3",
		"PT - Johann Goethe2",
		"EN - Johann Goethe2",
		"ES - Johann Goethe2"),

	("card_p2", "printer_coree3",
		"PT - CEO & Founder2",
		"EN - CEO & Founder2",
		"ES - CEO & Founder2"),

	("card_titulo3", "printer_coree3",
		"PT - Johann Goethe3",
		"EN - Johann Goethe3",
		"ES - Johann Goethe3"),

	("card_p3", "printer_coree3",
		"PT - CEO & Founder3",
		"EN - CEO & Founder3",
		"ES - CEO & Founder3"),

	("card_titulo4", "printer_coree3",
		"PT - Johann Goethe4",
		"EN - Johann Goethe4",
		"ES - Johann Goethe4"),

	("card_p4", "printer_coree3",
		"PT - CEO & Founder4",
		"EN - CEO & Founder4",
		"ES - CEO & Founder4"),

	-- ==========

	("titulo4", "printer_coree3",
		"PT - I enjoy with my whole heart",
		"EN - I enjoy with my whole heart",
		"ES - I enjoy with my whole heart"),

	("titulo4_1", "printer_coree3",
		"PT - One1",
		"EN - One1",
		"ES - One1"),


	("txt4_1", "printer_coree3",
		"PT - A wonderful serenity has taken possession of my entire soul.",
		"EN - A wonderful serenity has taken possession of my entire soul.",
		"ES - A wonderful serenity has taken possession of my entire soul."),

	("titulo4_2", "printer_coree3",
		"PT - One2",
		"EN - One2",
		"ES - One2"),


	("txt4_2", "printer_coree3",
		"PT - A wonderful serenity has taken possession of my entire soul.",
		"EN - A wonderful serenity has taken possession of my entire soul.",
		"ES - A wonderful serenity has taken possession of my entire soul."),


	("titulo4_3", "printer_coree3",
		"PT - One3",
		"EN - One3",
		"ES - One3"),

	("txt4_3", "printer_coree3",
		"PT - A wonderful serenity has taken possession of my entire soul.",
		"EN - A wonderful serenity has taken possession of my entire soul.",
		"ES - A wonderful serenity has taken possession of my entire soul."),


	("titulo4_4", "printer_coree3",
		"PT - One4",
		"EN - One4",
		"ES - One4"),


	("txt4_4", "printer_coree3",
		"PT - A wonderful serenity has taken possession of my entire soul.",
		"EN - A wonderful serenity has taken possession of my entire soul.",
		"ES - A wonderful serenity has taken possession of my entire soul."),


	("titulo4_5", "printer_coree3",
		"PT - One5",
		"EN - One5",
		"ES - One5"),


	("txt4_5", "printer_coree3",
		"PT - A wonderful serenity has taken possession of my entire soul.",
		"EN - A wonderful serenity has taken possession of my entire soul.",
		"ES - A wonderful serenity has taken possession of my entire soul."),



	("titulo4_6", "printer_coree3",
		"PT - One6",
		"EN - One6",
		"ES - One6"),

	("txt4_6", "printer_coree3",
		"PT - A wonderful serenity has taken possession of my entire soul.",
		"EN - A wonderful serenity has taken possession of my entire soul.",
		"ES - A wonderful serenity has taken possession of my entire soul."),


	("titulo5", "printer_coree3",
		"PT - It is time to act",
		"EN - It is time to act",
		"ES - It is time to act"),

	("txt5", "printer_coree3",
		"PT - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.",
		"EN - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.",
		"ES - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents."),

	("button1", "printer_coree3",
		"PT - Call to action",
		"EN - Call to action",
		"ES - Call to action"),




	-- ACESSORIO_EZYCURE ==============================================

	("titulo1", "acessorio_ezycure",
		"PT - Display 4",
		"EN - Display 4",
		"ES - Display 4"),

	("txt1", "acessorio_ezycure",
		"PT - Lead paragraph. A wonderful serenity has taken possession of my entire soul.",
		"EN - Lead paragraph. A wonderful serenity has taken possession of my entire soul.",
		"ES - Lead paragraph. A wonderful serenity has taken possession of my entire soul."),

	("titulo2", "acessorio_ezycure",
		"PT - O my friend",
		"EN - O my friend",
		"ES - O my friend"),

	("titulo2_1", "acessorio_ezycure",
		"PT - The trickling stream",
		"EN - The trickling stream",
		"ES - The trickling stream"),

	("txt2", "acessorio_ezycure",
		"PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies",
		"EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies",
		"ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies"),

	("titulo3", "acessorio_ezycure",
		"PT - I hear the buzz",
		"EN - I hear the buzz",
		"ES - I hear the buzz"),

	("titulo3_1", "acessorio_ezycure",
		"PT - First",
		"EN - First",
		"ES - First"),

	("txt3_1", "acessorio_ezycure",
		"PT - I am so happy, my dear friend, so absorbed in the exquisite sense.",
		"EN - I am so happy, my dear friend, so absorbed in the exquisite sense.",
		"ES - I am so happy, my dear friend, so absorbed in the exquisite sense."),

	("titulo3_2", "acessorio_ezycure",
		"PT - First",
		"EN - First",
		"ES - First"),

	("txt3_2", "acessorio_ezycure",
		"PT - I am so happy, my dear friend, so absorbed in the exquisite sense.",
		"EN - I am so happy, my dear friend, so absorbed in the exquisite sense.",
		"ES - I am so happy, my dear friend, so absorbed in the exquisite sense."),


	("titulo3_3", "acessorio_ezycure",
		"PT - First",
		"EN - First",
		"ES - First"),

	("txt3_3", "acessorio_ezycure",
		"PT - I am so happy, my dear friend, so absorbed in the exquisite sense.",
		"EN - I am so happy, my dear friend, so absorbed in the exquisite sense.",
		"ES - I am so happy, my dear friend, so absorbed in the exquisite sense."),

	("titulo3_4", "acessorio_ezycure",
		"PT - First",
		"EN - First",
		"ES - First"),

	("txt3_4", "acessorio_ezycure",
		"PT - I am so happy, my dear friend, so absorbed in the exquisite sense.",
		"EN - I am so happy, my dear friend, so absorbed in the exquisite sense.",
		"ES - I am so happy, my dear friend, so absorbed in the exquisite sense."),



	("titulo4", "acessorio_ezycure",
		"PT - Countless indescribable forms",
		"EN - Countless indescribable forms",
		"ES - Countless indescribable forms"),


	("titulo5", "acessorio_ezycure",
		"PT - It is time to act",
		"EN - It is time to act",
		"ES - It is time to act"),

	("txt5", "acessorio_ezycure",
		"PT - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.",
		"EN - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.",
		"ES - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents."),

	("button1", "acessorio_ezycure",
		"PT - Call to action",
		"EN - Call to action",
		"ES - Call to action"),




	-- APLICACAO_ODONTOLOGIA ==============================================

	("titulo1", "app_odontologia",
		"PT - Odontologia",
		"EN - Odontologia",
		"ES - Odontologia"),


	("txt1", "app_odontologia",
		"PT - Heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions, could impress upon paper all that is living.",
		"EN - Heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions, could impress upon paper all that is living.",
		"ES - Heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions, could impress upon paper all that is living."),


	("titulo2", "app_odontologia",
		"PT - I enjoy with my whole heart",
		"EN - I enjoy with my whole heart",
		"ES - I enjoy with my whole heart"),


	("txt2", "app_odontologia",
		"PT - Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God! ",
		"EN - Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God! ",
		"ES - Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God! "),


	("titulo3", "app_odontologia",
		"PT - O my friend",
		"EN - O my friend",
		"ES - O my friend"),


	("txt3", "app_odontologia",
		"PT - I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies",
		"EN - I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies",
		"ES - I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies"),


	("titulo4", "app_odontologia",
		"PT - O my friend",
		"EN - O my friend",
		"ES - O my friend"),


	("txt4", "app_odontologia",
		"PT - I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies",
		"EN - I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies",
		"ES - I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies"),


	("titulo5", "app_odontologia",
		"PT - I feel the charm of existence in this spot.",
		"EN - I feel the charm of existence in this spot.",
		"ES - I feel the charm of existence in this spot."),


	("titulo6", "app_odontologia",
		"PT - Call your visitors to act. Now",
		"EN - Call your visitors to act. Now",
		"ES - Call your visitors to act. Now"),


	("button1", "app_odontologia",
		"PT - Get your license",
		"EN - Get your license",
		"ES - Get your license"),




	-- APLICACAO_MANUFATURA ==============================================

	("titulo1", "app_manufatura",
		"PT - O my friend",
		"EN - O my friend",
		"ES - O my friend"),

	("txt1", "app_manufatura",
		"PT - Would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite.",
		"EN - Would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite.",
		"ES - Would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite."),

	("titulo2", "app_manufatura",
		"PT - On one hand",
		"EN - On one hand",
		"ES - On one hand"),

	("txt2", "app_manufatura",
		"PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks.",
		"EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks.",
		"ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks."),

	("titulo3", "app_manufatura",
		"PT - On the other",
		"EN - On the other",
		"ES - On the other"),

	("txt3", "app_manufatura",
		"PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks.",
		"EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks.",
		"ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks."),

	("titulo4", "app_manufatura",
		"PT - A wonderful serenity",
		"EN - A wonderful serenity",
		"ES - A wonderful serenity"),

	("titulo4_1", "app_manufatura",
		"PT - #1",
		"EN - #1",
		"ES - #1"),

	("txt4_1", "app_manufatura",
		"PT - I lie close to the earth, a thousand unknown plants.",
		"EN - I lie close to the earth, a thousand unknown plants.",
		"ES - I lie close to the earth, a thousand unknown plants."),

	("titulo4_2", "app_manufatura",
		"PT - #2",
		"EN - #2",
		"ES - #2"),

	("txt4_2", "app_manufatura",
		"PT - I lie close to the earth, a thousand unknown plants.",
		"EN - I lie close to the earth, a thousand unknown plants.",
		"ES - I lie close to the earth, a thousand unknown plants."),

	("titulo4_3", "app_manufatura",
		"PT - #3",
		"EN - #3",
		"ES - #3"),

	("txt4_3", "app_manufatura",
		"PT - I lie close to the earth, a thousand unknown plants.",
		"EN - I lie close to the earth, a thousand unknown plants.",
		"ES - I lie close to the earth, a thousand unknown plants."),

	("titulo4_4", "app_manufatura",
		"PT - #4",
		"EN - #4",
		"ES - #4"),

	("txt4_4", "app_manufatura",
		"PT - I lie close to the earth, a thousand unknown plants.",
		"EN - I lie close to the earth, a thousand unknown plants.",
		"ES - I lie close to the earth, a thousand unknown plants."),

	("titulo4_5", "app_manufatura",
		"PT - #5",
		"EN - #5",
		"ES - #5"),

	("txt4_5", "app_manufatura",
		"PT - I lie close to the earth, a thousand unknown plants.",
		"EN - I lie close to the earth, a thousand unknown plants.",
		"ES - I lie close to the earth, a thousand unknown plants."),

	("titulo4_6", "app_manufatura",
		"PT - #6",
		"EN - #6",
		"ES - #6"),

	("txt4_6", "app_manufatura",
		"PT - When I hear the buzz of the little world among the stalks.",
		"EN - When I hear the buzz of the little world among the stalks.",
		"ES - When I hear the buzz of the little world among the stalks."),


	("titulo5", "app_manufatura",
		"PT - A wonderful serenity",
		"EN - A wonderful serenity",
		"ES - A wonderful serenity"),

	("txt5", "app_manufatura",
		"PT - Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.",
		"EN - Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.",
		"ES - Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine."),


	("titulo5_1", "app_manufatura",
		"PT - One",
		"EN - One",
		"ES - One"),

	("txt5_1", "app_manufatura",
		"PT - I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.",
		"EN - I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.",
		"ES - I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now."),

	("titulo5_2", "app_manufatura",
		"PT - Two",
		"EN - Two",
		"ES - Two"),

	("txt5_2", "app_manufatura",
		"PT - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.",
		"EN - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.",
		"ES - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents."),

	("titulo5_3", "app_manufatura",
		"PT - Three",
		"EN - Three",
		"ES - Three"),

	("txt5_3", "app_manufatura",
		"PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me.",
		"EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me.",
		"ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me."),


	("titulo6", "app_manufatura",
		"PT - Call your visitors to act. Now",
		"EN - Call your visitors to act. Now",
		"ES - Call your visitors to act. Now"),

	("button1", "app_manufatura",
		"PT - Get your license",
		"EN - Get your license",
		"ES - Get your license"),



	-- APLICACAO_EDUCAÇÃO ==============================================

	("titulo1", "app_educacao",
		"PT - I feel the charm",
		"EN - I feel the charm",
		"ES - I feel the charm"),

	("titulo1_1", "app_educacao",
		"PT - Of existence in this spot",
		"EN - Of existence in this spot",
		"ES - Of existence in this spot"),

	("txt1", "app_educacao",
		"PT - Which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.",
		"EN - Which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.",
		"ES - Which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents."),

	("txt_1", "app_educacao",
		"PT - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees.",
		"EN - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees.",
		"ES - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees."),

	("titulo2_1", "app_educacao",
		"PT - One",
		"EN - One",
		"ES - One"),

	("txt2_1", "app_educacao",
		"PT - So absorbed in the exquisite sense of mere tranquil existence.",
		"EN - So absorbed in the exquisite sense of mere tranquil existence.",
		"ES - So absorbed in the exquisite sense of mere tranquil existence."),

	("titulo2_2", "app_educacao",
		"PT - Two",
		"EN - Two",
		"ES - Two"),

	("txt2_2", "app_educacao",
		"PT - So absorbed in the exquisite sense of mere tranquil existence.",
		"EN - So absorbed in the exquisite sense of mere tranquil existence.",
		"ES - So absorbed in the exquisite sense of mere tranquil existence."),

	("titulo2_3", "app_educacao",
		"PT - Three",
		"EN - Three",
		"ES - Three"),

	("txt2_3", "app_educacao",
		"PT - I should be incapable of drawing a single stroke.",
		"EN - I should be incapable of drawing a single stroke.",
		"ES - I should be incapable of drawing a single stroke."),

	("titulo3", "app_educacao",
		"PT - A thousand sliders",
		"EN - A thousand sliders",
		"ES - A thousand sliders"),

	("txt3", "app_educacao",
		"PT - A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.",
		"EN - A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.",
		"ES - A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine."),

	("titulo4", "app_educacao",
		"PT - Call your visitors to act. Now",
		"EN - Call your visitors to act. Now",
		"ES - Call your visitors to act. Now"),

	("button1", "app_educacao",
		"PT - Get your license",
		"EN - Get your license",
		"ES - Get your license"),



	-- APLICACAO_JOALHERIA ==============================================

	("titulo1", "app_joalheria",
		"PT - I feel the charm",
		"EN - I feel the charm",
		"ES - I feel the charm"),

	("txt1", "app_joalheria",
		"PT - Of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.",
		"EN - Of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.",
		"ES - Of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents."),

	("txt1_1", "app_joalheria",
		"PT - Oh, would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!",
		"EN - Oh, would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!",
		"ES - Oh, would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!"),

	("titulo2", "app_joalheria",
		"PT - I am not alone, and feel the charm of existence in this spot.",
		"EN - I am not alone, and feel the charm of existence in this spot.",
		"ES - I am not alone, and feel the charm of existence in this spot."),

	("titulo2_1", "app_joalheria",
		"PT - One",
		"EN - One",
		"ES - One"),

	("titulo2_2", "app_joalheria",
		"PT - Two",
		"EN - Two",
		"ES - Two"),

	("titulo2_3", "app_joalheria",
		"PT - Three",
		"EN - Three",
		"ES - Three"),

	("titulo2_4", "app_joalheria",
		"PT - Four",
		"EN - Four",
		"ES - Four"),

	("titulo2_5", "app_joalheria",
		"PT - Five",
		"EN - Five",
		"ES - Five"),

	("titulo2_6", "app_joalheria",
		"PT - Six",
		"EN - Six",
		"ES - Six"),

	("titulo3", "app_joalheria",
		"PT - I enjoy with my whole heart",
		"EN - I enjoy with my whole heart",
		"ES - I enjoy with my whole heart"),

	("txt3", "app_joalheria",
		"PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.",
		"EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.",
		"ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world."),

	("titulo4", "app_joalheria",
		"PT - Call your visitors to act. Now",
		"EN - Call your visitors to act. Now",
		"ES - Call your visitors to act. Now"),

	("button1", "app_joalheria",
		"PT - Get your license",
		"EN - Get your license",
		"ES - Get your license"),




	-- APLICACAO_JOALHERIA ==============================================

	("titulo1", "contato",
		"Contate-nos!",
		"Contact us!",
		"Fotos!"),

	("txt1", "contato",
		"Se você gostaria de saber mais sobre nossos produtos ou tem alguma dúvida nos contate e logo responderemos.",
		"If you would like to know more about our products or have any questions contact us and we will respond soon.",
		"Si usted desea saber más sobre nuestros productos o tiene alguna duda nos contacte y luego responderemos."),

	("txt1_1", "contato",
		"(11) 95245-3334 - (15) 4101-0014",
		"(11) 95245-3334 - (15) 4101-0014",
		"(11) 95245-3334 - (15) 4101-0014"),

	("txt1_2", "contato",
		"contato@ezy3d.com.br",
		"contato@ezy3d.com.br",
		"contato@ezy3d.com.br"),

	("txt1_3", "contato",
		"R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010",
		"R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010",
		"R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010"),

	("txt1_4", "contato",
		"Horário de atendimento: Segunda a Sexta das 08h15 às 17h45",
		"Office hours: Monday to Friday from 08:15 to 17:45",
		"Horario de atención: Lunes a Viernes de 08h15 a 17h45"),

	("input1", "contato",
		"Nome",
		"Name",
		"Nombre"),

	("input2", "contato",
		"E-mail",
		"Email",
		"Email"),

	("input3", "contato",
		"Assunto",
		"Subject matter",
		"Sujeto"),

	("input4", "contato",
		"Sua mensagem",
		"Your message",
		"Su mensaje"),

	("button1", "contato",
		"Enviar",
		"Submit",
		"Enviar"),





	-- APLICACAO_JOALHERIA ==============================================

	("success", "contato",
		"Alterações salvas comsucesso!",
		"Submit",
		"Enviar"),

	("perfil_menu_editar", "perfil_cliente",
		"Editar Perfil",
		"Submit",
		"Submit"),

	("perfil_menu_altsenha", "perfil_cliente",
		"Alterar Senha",
		"Submit",
		"Submit"),

	("perfil_menu_orcamento", "perfil_cliente",
		"Solicitar Orçamento",
		"Submit",
		"Submit"),

	("perfil_menu_suporte", "perfil_cliente",
		"Suporte Técnico",
		"Submit",
		"Submit"),

	("perfil_nome", "perfil_cliente",
		"Nome",
		"Submit",
		"Submit"),

	("perfil_erronome", "perfil_cliente",
		"Pelo menos 3 caracteres requeridos.",
		"Submit",
		"Submit"),

	("perfil_sobrenome", "perfil_cliente",
		"Sobrenome",
		"Submit",
		"Submit"),

	("perfil_errosobrenome", "perfil_cliente",
		"Pelo menos 3 caracteres requeridos.",
		"Submit",
		"Submit"),

	("perfil_empresa", "perfil_cliente",
		"Empresa",
		"Submit",
		"Submit"),

	("perfil_pais", "perfil_cliente",
		"Pais",
		"Submit",
		"Submit"),

	("perfil_erropais", "perfil_cliente",
		"Informe seu Pais.",
		"Submit",
		"Submit"),

	("perfil_ramo", "perfil_cliente",
		"Ramo",
		"Submit",
		"Submit"),

	("perfil_erroramo", "perfil_cliente",
		"Informe seu Ramo.",
		"Submit",
		"Submit"),

	("perfil_outro1", "perfil_cliente",
		"Outro",
		"Submit",
		"Submit"),

	("perfil_outroramo", "perfil_cliente",
		"Outro Ramo",
		"Submit",
		"Submit"),

	("perfil_erro_outroramo", "perfil_cliente",
		"3 caracteres requeridos",
		"Submit",
		"Submit"),

	("perfil_infoprivadas", "perfil_cliente",
		"Informações privadas",
		"Submit",
		"Submit"),

	("perfil_email", "perfil_cliente",
		"E-mail",
		"Submit",
		"Submit"),

	("perfil_erroemail1", "perfil_cliente",
		"Digite um e-mail válido.",
		"Submit",
		"Submit"),

	("perfil_erroemail2", "perfil_cliente",
		"Este e-mail já está sendo utilizado.",
		"Submit",
		"Submit"),

	("perfil_telefone", "perfil_cliente",
		"Telefone",
		"Submit",
		"Submit"),

	("perfil_errofone", "perfil_cliente",
		"Digite um telefone válido. (o DDD é necessário)",
		"Submit",
		"Submit"),

	("perfil_oldsenha", "perfil_cliente",
		"Senha Antiga",
		"Submit",
		"Submit"),

	("perfil_erro_oldsenha", "perfil_cliente",
		"Senha antiga incorreta.",
		"Submit",
		"Submit"),

	("perfil_newsenha", "perfil_cliente",
		"Nova Senha",
		"Submit",
		"Submit"),

	("perfil_erro_newsenha", "perfil_cliente",
		"A sua nova senha não pode ser igual a senha antiga.",
		"Submit",
		"Submit"),

	("perfil_confirmarsenha", "perfil_cliente",
		"Confirmar Nova Senha",
		"Submit",
		"Submit"),

	("perfil_erro_confirmarsenha", "perfil_cliente",
		"Senhas não coicidem. Tente novamente.",
		"Submit",
		"Submit"),

	("perfil_esqueceusenha", "perfil_cliente",
		"Esqueceu a Senha?",
		"Submit",
		"Submit"),

	("perfil_orcamento_titulo1", "perfil_cliente",
		"Solicitar Orçamento",
		"Submit",
		"Submit"),

	("perfil_orcamento_txt1", "perfil_cliente",
		"The people listed here are contacts you've uploaded to Instagram. To remove your synced contacts, tap Delete All.",
		"Submit",
		"Submit"),

	("perfil_orcamento_label1", "perfil_cliente",
		"Impressoras 3D",
		"Submit",
		"Submit"),

	("perfil_orcamento_label2", "perfil_cliente",
		"Acessórios",
		"Submit",
		"Submit"),

	("perfil_orcamento_label3", "perfil_cliente",
		"Observaçao",
		"Submit",
		"Submit"),

	("perfil_orcamento_placeholder1", "perfil_cliente",
		"Deixe um comentário",
		"Submit",
		"Submit"),

	("perfil_orcamento_button1", "perfil_cliente",
		"Enviar",
		"Submit",
		"Submit"),

	("perfil_suporte_titulo1", "perfil_cliente",
		"Suporte Técnico",
		"Submit",
		"Submit"),

	("perfil_suporte_txt1", "perfil_cliente",
		"The people listed here are contacts you've uploaded to Instagram. To remove your synced contacts, tap Delete All.",
		"Submit",
		"Submit"),

	("perfil_suporte_label1", "perfil_cliente",
		"Máquina",
		"Submit",
		"Submit"),

	("perfil_suporte_select1", "perfil_cliente",
		"Selecione a sua máquina...",
		"Submit",
		"Submit"),

	("perfil_suporte_label2", "perfil_cliente",
		"Problema",
		"Submit",
		"Submit"),


	("perfil_suporte_select2", "perfil_cliente",
		"Selecione seu problema...",
		"Submit",
		"Submit"),

	("perfil_suporte_outro1", "perfil_cliente",
		"Outro",
		"Submit",
		"Submit"),

	("perfil_suporte_placeholder1", "perfil_cliente",
		"Descreva seu problema",
		"Submit",
		"Submit"),


	("perfil_suporte_button1", "perfil_cliente",
		"Enviar",
		"Submit",
		"Submit");