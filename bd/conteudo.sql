USE batata;

DROP TABLE IF EXISTS conteudo;

CREATE TABLE conteudo(
	apelido VARCHAR(30),
	pagina VARCHAR(15),
	CONSTRAINT id PRIMARY KEY(apelido, pagina),
	pt TEXT,
	en TEXT,
	es TEXT
);

INSERT INTO conteudo VALUES
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
"ES - Get your license");