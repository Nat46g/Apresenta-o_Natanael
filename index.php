<?php
// ============================================
// PORTFOLIO COMPLETO - NATANAEL LUCAS
// Com imagens locais e certificados
// ============================================

session_start();

// ==================== CONFIGURAÇÃO ====================
define('SITE_NAME', 'Natanael Lucas');
define('SITE_TITLE', 'Desenvolvedor em Formação');
define('CURRENT_YEAR', date('Y'));

// Contato
$contact_info = [
    'email' => 'natanaellucasmiranda01@gmail.com',
    'phone' => '(31) 98492-4415',
    'whatsapp' => '5531984924415',
    'location' => 'Belo Horizonte, MG - Brasil',
    'linkedin' => 'https://www.linkedin.com/in/natanael-lucas-miranda-979251252/',
    'github' => 'https://github.com/Nat46g',
    'instagram' => 'https://www.instagram.com/natanael46gelan/'
];

// Habilidades (diminuídas em 10%)
$skills = [
    'frontend' => [
        'title' => 'Frontend Básico',
        'icon' => 'fa-code',
        'items' => [
            ['name' => 'HTML5', 'level' => 77],
            ['name' => 'CSS3', 'level' => 72],
            ['name' => 'JavaScript', 'level' => 63]
        ]
    ],
    'backend' => [
        'title' => 'Backend & Dados',
        'icon' => 'fa-database',
        'items' => [
            ['name' => 'Lógica de Programação', 'level' => 63],
            ['name' => 'MySQL', 'level' => 50],
            ['name' => 'Python Básico', 'level' => 68]
        ]
    ],
    'tools' => [
        'title' => 'Ferramentas',
        'icon' => 'fa-tools',
        'items' => [
            ['name' => 'Git & GitHub', 'level' => 63],
            ['name' => 'VS Code', 'level' => 77],
            ['name' => 'Figma Básico', 'level' => 45]
        ]
    ]
];

// Projetos com imagens locais
$projects = [
    [
        'title' => 'Realm Ascension - RPG de batalha medieval',
        'description' => 'Jogo RPG de texto em JavaScript com sistema de combate por turnos, escolha de personagens, sistema de inventário e progressão de níveis. Ambientado em um mundo medieval fantástico.',
        'image' => 'icon-512.png',
        'tech' => ['JavaScript', 'HTML5', 'CSS3'],
        'github' => 'https://github.com/Nat46g/RPG-Realm-Ascension',
        'demo' => 'https://realm-ascension.netlify.app'
    ],
    [
        'title' => 'ChatBot Inteligente - DN-Studios',
        'description' => 'ChatBot desenvolvido em JavaScript com interface web que responde perguntas sobre programação. Usa processamento de linguagem natural básico e possui banco de dados de comandos.',
        'image' => 'chat-bot.png',
        'tech' => ['JavaScript', 'HTML5', 'CSS3', 'Responsivo'],
        'github' => 'https://github.com/Nat46g/CHAT-BOT_DN-STUDIOS',
        'demo' => 'https://chatbotdn.netlify.app'
    ],
    [
        'title' => 'AutoPremium - Site de Venda de Carros',
        'description' => 'Plataforma completa para compra e venda de veículos com sistema de cadastro de usuários, filtros avançados, galeria de imagens e sistema de favoritos.',
        'image' => 'autopremium.png',
        'tech' => ['HTML5', 'CSS3', 'JavaScript', 'Responsivo'],
        'github' => 'https://github.com/Nat46g/AUTOPREMIUM',
        'demo' => 'https://autopremiun.netlify.app'
    ]
];

// Certificados com dados reais dos PDFs
$certificates = [
    [
        'id' => 1,
        'title' => 'AI-900: Fundamentos de IA no Azure',
        'short_desc' => 'Certificação Microsoft sobre fundamentos de Inteligência Artificial na plataforma Azure.',
        'full_desc' => 'Curso autoinstrucional sobre fundamentos de IA no Azure, cobrindo conceitos de machine learning, visão computacional, processamento de linguagem natural e serviços cognitivos da Microsoft Azure.',
        'date_conclusion' => '02/12/2025',
        'date_start' => '18/11/2025',
        'institution' => 'Microsoft / Fundação Bradesco',
        'duration' => '16 horas',
        'skills' => 'Azure AI Services, Machine Learning, Computer Vision, NLP, Responsible AI',
        'certificate_id' => 'CEA04AA5-8855-42F2-A645-5888784654FC',
        'student_name' => 'NATANAEL LUCAS MIRANDA ALVARENGA',
        'pdf_name' => 'certificado_ai-900_fundamentos_de_ia_no_azure.pdf'
    ],
    [
        'id' => 2,
        'title' => 'Comunicação e Mobilização com IA',
        'short_desc' => 'Certificação sobre utilização de ferramentas de IA para comunicação eficaz.',
        'full_desc' => 'Curso sobre aplicação de ferramentas de IA para melhorar comunicação organizacional, engajar equipes e implementar estratégias de mobilização eficazes usando tecnologias inteligentes.',
        'date_conclusion' => '18/11/2025',
        'date_start' => '18/11/2025',
        'institution' => 'Fundação Bradesco',
        'duration' => '2 horas',
        'skills' => 'Comunicação Digital, Engajamento, Ferramentas de IA, Estratégias Organizacionais',
        'certificate_id' => '71EE5709-361C-4791-B4D8-411CC108ACF7',
        'student_name' => 'NATANAEL LUCAS MIRANDA ALVARENGA',
        'pdf_name' => 'certificado_comunicacao_e_mobilizacao_com_ia.pdf'
    ],
    [
        'id' => 3,
        'title' => 'Ética na Era da IA',
        'short_desc' => 'Certificado sobre princípios éticos no desenvolvimento de Inteligência Artificial.',
        'full_desc' => 'Curso sobre os desafios éticos no desenvolvimento e implementação de sistemas de IA. Aborda viés algorítmico, privacidade, transparência e responsabilidade social na era da inteligência artificial.',
        'date_conclusion' => '18/11/2025',
        'date_start' => '17/11/2025',
        'institution' => 'Fundação Bradesco',
        'duration' => '2 horas',
        'skills' => 'Ética Digital, Responsabilidade Algorítmica, Privacidade, Transparência, Governança de IA',
        'certificate_id' => 'A17601BC-ED52-40E9-9A48-84B992173E6C',
        'student_name' => 'NATANAEL LUCAS MIRANDA ALVARENGA',
        'pdf_name' => 'certificado_etica_na_era_da_ia.pdf'
    ],
    [
        'id' => 4,
        'title' => 'Fluência Digital',
        'short_desc' => 'Certificação sobre competências digitais essenciais para o mercado de trabalho.',
        'full_desc' => 'Certificação em competências digitais essenciais para o século XXI, incluindo comunicação digital, colaboração online, segurança cibernética e uso ético de tecnologias.',
        'date_conclusion' => '20/11/2025',
        'date_start' => '18/11/2025',
        'institution' => 'Fundação Bradesco',
        'duration' => '4 horas',
        'skills' => 'Competências Digitais, Segurança Online, Colaboração Virtual, Cidadania Digital',
        'certificate_id' => 'D1499E00-9C0B-44CC-8023-4C220C39739B',
        'student_name' => 'NATANAEL LUCAS MIRANDA ALVARENGA',
        'pdf_name' => 'certificado_fluencia.pdf'
    ],
    [
        'id' => 5,
        'title' => 'IA na Prática: Como Dados Bem Estruturados Fazem a Diferença',
        'short_desc' => 'Certificado sobre aplicação prática de IA com foco em dados estruturados.',
        'full_desc' => 'Curso prático sobre implementação de soluções de IA com foco na qualidade e estruturação de dados. Inclui casos reais de aplicação em diferentes setores para tomada de decisões.',
        'date_conclusion' => '18/11/2025',
        'date_start' => '18/11/2025',
        'institution' => 'Fundação Bradesco',
        'duration' => '2 horas',
        'skills' => 'Análise de Dados, Machine Learning Prático, Visualização, Tomada de Decisão Baseada em Dados',
        'certificate_id' => '5F1B13D3-C359-4A8B-BF83-7F9515552D67',
        'student_name' => 'NATANAEL LUCAS MIRANDA ALVARENGA',
        'pdf_name' => 'certificado_ia_na_pratica_como_dados_bem_estruturados_fazem_a_diferenca.pdf'
    ],
    [
        'id' => 6,
        'title' => 'Inteligência Artificial e o Novo Contexto da Cultura Digital',
        'short_desc' => 'Certificado sobre o impacto da IA na transformação digital.',
        'full_desc' => 'Curso sobre a transformação cultural impulsionada pela IA nas organizações. Aborda adaptação cultural, gestão da mudança e desenvolvimento de mindset digital para a era da IA.',
        'date_conclusion' => '02/12/2025',
        'date_start' => '18/11/2025',
        'institution' => 'Fundação Bradesco',
        'duration' => '20 horas',
        'skills' => 'Transformação Digital, Cultura Organizacional, Adaptação Tecnológica, Mindset Digital',
        'certificate_id' => 'E0FF29C9-28E6-4551-8F9A-DD28846EC2DB',
        'student_name' => 'NATANAEL LUCAS MIRANDA ALVARENGA',
        'pdf_name' => 'certificado_inteligencia_artificial_e_o_novo_contexto_da_cultura_digital.pdf'
    ],
    [
        'id' => 7,
        'title' => 'Introdução à Programação Orientada a Objetos (POO)',
        'short_desc' => 'Certificado sobre conceitos fundamentais de POO.',
        'full_desc' => 'Curso completo sobre Programação Orientada a Objetos, abordando os pilares fundamentais: encapsulamento, herança, polimorfismo e abstração, com exemplos práticos em Java.',
        'date_conclusion' => '04/12/2025',
        'date_start' => '04/12/2025',
        'institution' => 'Fundação Bradesco',
        'duration' => '5 horas',
        'skills' => 'POO, Java, Classes e Objetos, Herança, Polimorfismo, Encapsulamento',
        'certificate_id' => '8980CE72-F9AC-4D24-ACC1-471D5FE7B045',
        'student_name' => 'NATANAEL LUCAS MIRANDA ALVARENGA',
        'pdf_name' => 'certificado_programacao_orientada_a_objetos.pdf'
    ]
];

$courses = [
    [
        'title' => 'Desenvolvimento de Sistemas',
        'description' => 'Curso técnico que abrange programação, banco de dados, desenvolvimento web e mobile, preparando para atuar no desenvolvimento de sistemas computacionais.',
        'duration' => '1200 horas',
        'institution' => 'Escola Técnica',
        'status' => 'Cursando'
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfólio de Natanael Lucas - Desenvolvedor em formação">
    <meta name="keywords" content="desenvolvedor, programador, portfolio, HTML, CSS, JavaScript, PHP, MySQL, certificados, IA, POO">
    <meta name="author" content="Natanael Lucas">
    <title>Natanael Lucas | Desenvolvedor em Formação</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ==================== VARIÁVEIS ==================== */
        :root {
            --primary: #1a5276;
            --primary-dark: #0e3a5c;
            --primary-light: #2e86c1;
            --secondary: #2e86c1;
            --accent: #e74c3c;
            --success: #58d68d;
            --light: #f8f9fa;
            --dark: #1b4f72;
            --text: #333;
            --text-light: #555;
            --shadow: 0 5px 15px rgba(0,0,0,0.1);
            --shadow-hover: 0 10px 25px rgba(0,0,0,0.15);
            --transition: all 0.3s ease;
            --radius: 10px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text);
            background: #f9f9f9;
        }
        .container { width: 90%; max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        section { padding: 80px 0; }
        h1, h2, h3, h4 { margin-bottom: 20px; font-weight: 700; }
        h1 { font-size: 3rem; color: var(--primary); }
        h2 {
            font-size: 2.2rem;
            text-align: center;
            margin-bottom: 50px;
            position: relative;
            color: var(--primary);
        }
        h2:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 2px;
        }
        h3 { font-size: 1.5rem; color: var(--secondary); margin-bottom: 15px; }
        p { margin-bottom: 15px; color: var(--text-light); }

        /* Botões */
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            border-radius: 30px;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover { transform: translateY(-3px); box-shadow: var(--shadow-hover); }
        .btn-outline {
            background: transparent;
            border: 2px solid var(--secondary);
            color: var(--secondary);
        }
        .btn-outline:hover { background: linear-gradient(135deg, var(--secondary), var(--primary)); color: white; }
        .btn-pdf { background: linear-gradient(135deg, #e74c3c, #c0392b); }
        .btn-pdf:hover { background: linear-gradient(135deg, #c0392b, #a93226); }

        /* Header */
        header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow);
        }
        .header-container { display: flex; justify-content: space-between; align-items: center; }
        .logo a { font-size: 1.8rem; font-weight: 800; color: white; text-decoration: none; }
        .logo span { color: #58d68d; }
        .tech-icons-header { display: flex; gap: 12px; align-items: center; }
        .tech-icons-header i { font-size: 1.2rem; color: #58d68d; transition: var(--transition); }
        .tech-icons-header i:hover { transform: translateY(-2px); color: white; }
        nav ul { display: flex; list-style: none; gap: 30px; }
        nav ul li a { color: white; text-decoration: none; transition: var(--transition); }
        nav ul li a:hover { color: #58d68d; }
        .nav-btn { background: rgba(255,255,255,0.2); padding: 8px 20px; border-radius: 25px; }
        .menu-toggle { display: none; font-size: 1.5rem; cursor: pointer; }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, rgba(26,82,118,0.95), rgba(26,82,118,0.98)), url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 180px 0 120px;
            margin-top: 70px;
        }
        .hero h1 { color: white; margin-bottom: 20px; animation: fadeInUp 0.8s ease; }
        .hero p { color: var(--light); font-size: 1.2rem; max-width: 700px; margin: 0 auto 30px; animation: fadeInUp 0.8s ease 0.2s both; }
        .age-badge {
            display: inline-block;
            background: linear-gradient(135deg, #58d68d, #27ae60);
            color: var(--primary);
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 700;
            margin-top: 10px;
            animation: fadeInUp 0.8s ease 0.1s both;
        }
        .hero-btns { margin-top: 30px; animation: fadeInUp 0.8s ease 0.3s both; }
        .hero-btns .btn { margin: 0 10px; }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Sobre */
        .about-content { display: grid; grid-template-columns: 1fr 2fr; gap: 50px; align-items: center; }
        .profile-img {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .profile-img img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
        .tech-stack {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }
        .tech-stack span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(0,0,0,0.1);
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 0.9rem;
        }
        .education-info {
            background: linear-gradient(135deg, #e8f4fc, #d6eaf8);
            padding: 25px;
            border-radius: var(--radius);
            margin-top: 20px;
        }
        .education-info h4 { color: var(--primary); margin-bottom: 15px; }
        .education-info ul { list-style: none; }
        .education-info ul li { margin-bottom: 10px; padding-left: 25px; position: relative; }
        .education-info ul li:before { content: '✓'; position: absolute; left: 0; color: #58d68d; font-weight: bold; }

        /* Habilidades */
        .skills-section { background: linear-gradient(135deg, #f5f7fa, #eef2f7); }
        .skills-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }
        .skill-category {
            background: white;
            padding: 30px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        .skill-category:hover { transform: translateY(-10px); box-shadow: var(--shadow-hover); }
        .skill-header { text-align: center; margin-bottom: 25px; }
        .skill-header i { font-size: 2.5rem; color: var(--secondary); margin-bottom: 15px; }
        .skill-item { margin-bottom: 20px; }
        .skill-info { display: flex; justify-content: space-between; margin-bottom: 8px; }
        .skill-name { font-weight: 600; }
        .skill-percentage { color: var(--secondary); font-weight: 600; }
        .skill-level { width: 100%; height: 10px; background: #e0e0e0; border-radius: 5px; overflow: hidden; }
        .skill-level-bar { height: 100%; background: linear-gradient(90deg, var(--secondary), var(--primary)); border-radius: 5px; transition: width 1s ease; }

        /* Cursos e Certificados */
        .courses-certificates-section { background: #f9f9f9; }
        .courses-certificates-tabs { display: flex; justify-content: center; margin-bottom: 40px; gap: 10px; flex-wrap: wrap; }
        .tab-btn {
            padding: 12px 35px;
            background: white;
            border: none;
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-light);
            cursor: pointer;
            transition: var(--transition);
            border-radius: 30px;
            box-shadow: var(--shadow);
        }
        .tab-btn.active { background: linear-gradient(135deg, var(--secondary), var(--primary)); color: white; }
        .tab-content { display: none; animation: fadeIn 0.5s ease; }
        .tab-content.active { display: block; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        
        .courses-container, .certificates-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }
        .course-card, .certificate-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        .course-card:hover, .certificate-card:hover { transform: translateY(-10px); box-shadow: var(--shadow-hover); }
        .course-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 25px;
            text-align: center;
        }
        .course-header i { font-size: 2rem; margin-bottom: 10px; }
        .course-header h3 { color: white; margin-bottom: 0; font-size: 1.3rem; }
        .course-body, .certificate-body { padding: 25px; }
        .course-meta {
            display: flex;
            justify-content: space-between;
            margin: 15px 0;
            padding-top: 15px;
            border-top: 1px solid #eee;
            font-size: 0.9rem;
        }
        .course-status {
            display: inline-block;
            padding: 6px 15px;
            background: linear-gradient(135deg, #f39c12, #e67e22);
            color: white;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        .certificate-img {
            height: 160px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .pdf-placeholder {
            text-align: center;
            color: white;
            padding: 20px;
        }
        .pdf-placeholder i { font-size: 3rem; margin-bottom: 10px; }
        .pdf-placeholder p { color: white; font-size: 0.85rem; margin: 0; }
        .certificate-date {
            display: inline-block;
            background: #e8f4fc;
            color: var(--primary);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            margin-bottom: 15px;
        }
        .certificate-code {
            display: inline-block;
            background: #fef9e7;
            color: #f39c12;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-family: monospace;
            margin-left: 8px;
        }
        .certificate-actions { display: flex; gap: 10px; margin-top: 20px; flex-wrap: wrap; }
        .certificate-actions .btn { flex: 1; text-align: center; font-size: 0.8rem; padding: 10px 15px; }

        /* Projetos */
        .projects-container { display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 30px; }
        .project-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        .project-card:hover { transform: translateY(-10px); box-shadow: var(--shadow-hover); }
        .project-img {
            height: 200px;
            overflow: hidden;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .project-img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            background: white;
            transition: var(--transition);
        }
        .project-card:hover .project-img img {
            transform: scale(1.05);
        }
        .project-body { padding: 25px; }
        .project-tech { display: flex; flex-wrap: wrap; gap: 8px; margin: 15px 0; }
        .tech-tag {
            background: linear-gradient(135deg, #e8f4fc, #d6eaf8);
            color: var(--primary);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .project-links { display: flex; gap: 15px; margin-top: 20px; flex-wrap: wrap; }
        .project-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: var(--secondary);
            color: white;
            border-radius: 25px;
            font-weight: 500;
            text-decoration: none;
            font-size: 0.85rem;
            transition: var(--transition);
        }
        .project-link:hover { background: var(--primary); transform: translateY(-2px); }
        .project-link.outline { background: transparent; border: 2px solid var(--secondary); color: var(--secondary); }
        .project-link.outline:hover { background: var(--secondary); color: white; }
        .github-more { text-align: center; margin-top: 50px; }

        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 60px 0 30px;
        }
        .footer-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px; }
        .footer-col h3 { color: white; margin-bottom: 25px; }
        .footer-col p { color: rgba(255,255,255,0.8); margin-bottom: 12px; }
        .footer-col i { margin-right: 10px; width: 20px; }
        .tech-footer-icons { display: flex; gap: 15px; margin-top: 15px; flex-wrap: wrap; }
        .tech-footer-icons span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.1);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
        .social-icons { display: flex; gap: 15px; margin-top: 20px; flex-wrap: wrap; }
        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            transition: var(--transition);
            color: white;
            text-decoration: none;
        }
        .social-icons a:hover { background: #58d68d; transform: translateY(-5px); color: var(--primary); }
        .copyright { text-align: center; margin-top: 50px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); color: rgba(255,255,255,0.6); font-size: 0.85rem; }

        /* Responsivo */
        @media (max-width: 992px) {
            .about-content { grid-template-columns: 1fr; text-align: center; gap: 30px; }
            .profile-img { max-width: 300px; margin: 0 auto; }
            h1 { font-size: 2.5rem; }
            h2 { font-size: 2rem; }
            section { padding: 60px 0; }
        }
        @media (max-width: 768px) {
            .menu-toggle { display: block; }
            .tech-icons-header { display: none; }
            nav {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 80%;
                max-width: 300px;
                height: calc(100vh - 70px);
                background: linear-gradient(135deg, var(--primary), var(--primary-dark));
                padding: 30px;
                transition: var(--transition);
                z-index: 999;
            }
            nav.active { left: 0; }
            nav ul { flex-direction: column; gap: 20px; }
            .hero { padding: 150px 0 80px; }
            .hero h1 { font-size: 2rem; }
            .hero-btns .btn { display: block; margin: 10px auto; width: 80%; max-width: 250px; }
            .certificate-actions { flex-direction: column; }
            .project-links { flex-direction: column; }
        }
        @media (max-width: 576px) {
            .courses-container, .certificates-container, .skills-container, .projects-container { grid-template-columns: 1fr; }
            .certificate-code { display: block; margin-left: 0; margin-top: 5px; }
        }
    </style>
</head>
<body>

<!-- ==================== HEADER ==================== -->
<header>
    <div class="container header-container">
        <div class="logo"><a href="#home">Natanael<span>Lucas</span></a></div>
        <div class="tech-icons-header">
            <i class="fab fa-js" title="JavaScript"></i>
            <i class="fab fa-php" title="PHP"></i>
            <i class="fas fa-database" title="MySQL"></i>
        </div>
        <div class="menu-toggle" id="menuToggle"><i class="fas fa-bars"></i></div>
        <nav id="mainNav">
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#about">Sobre Mim</a></li>
                <li><a href="#skills">Habilidades</a></li>
                <li><a href="#courses-certificates">Cursos & Certificados</a></li>
                <li><a href="#projects">Meus Projetos</a></li>
                <li><a href="#contact" class="nav-btn">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- ==================== HERO ==================== -->
<section class="hero" id="home">
    <div class="container">
        <h1>Natanael Lucas</h1>
        <div class="age-badge"><i class="fas fa-star"></i> 18 anos <i class="fas fa-star"></i></div>
        <p>Estudante do Ensino Médio e Desenvolvedor em formação. Atualmente cursando Desenvolvimento de Sistemas e apaixonado por tecnologia, programação e inovação.</p>
        <div class="hero-btns">
            <a href="#courses-certificates" class="btn"><i class="fas fa-certificate"></i> Ver Cursos & Certificados</a>
            <a href="#projects" class="btn btn-outline"><i class="fas fa-code"></i> Meus Projetos</a>
        </div>
    </div>
</section>

<!-- ==================== SOBRE ==================== -->
<section id="about">
    <div class="container">
        <h2>Sobre Mim</h2>
        <div class="about-content">
            <div class="profile-img">
                <img src="myfoto.jpeg" alt="Natanael Lucas">
            </div>
            <div class="about-text">
                <h3>Olá, eu sou o Natanael!</h3>
                <p>Sou um estudante do 3º ano do Ensino Médio com 18 anos, apaixonado por tecnologia e programação. Desde cedo me interessei por computadores e como eles funcionam, o que me levou a buscar conhecimento na área de desenvolvimento de software.</p>
                <p>Atualmente, além do Ensino Médio regular, estou cursando <strong>Desenvolvimento de Sistemas</strong>, onde tenho aprendido sobre lógica de programação, banco de dados, desenvolvimento web e mobile.</p>
                <p>Meu objetivo é me tornar um desenvolvedor full stack e contribuir para projetos inovadores que possam fazer a diferença na vida das pessoas através da tecnologia.</p>
                
                <div class="education-info">
                    <h4><i class="fas fa-graduation-cap"></i> Formação Acadêmica</h4>
                    <ul>
                        <li><strong>Ensino Médio</strong> - 3º ano (Cursando - Conclusão: Dezembro 2026)</li>
                        <li><strong>Curso Técnico</strong> - Desenvolvimento de Sistemas (Cursando)</li>
                        <li><strong>Previsão de conclusão</strong> - Dezembro 2026</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== HABILIDADES ==================== -->
<section id="skills" class="skills-section">
    <div class="container">
        <h2>Minhas Habilidades</h2>
        <div class="skills-container">
            <?php foreach ($skills as $skill_category): ?>
            <div class="skill-category">
                <div class="skill-header">
                    <i class="fas <?php echo $skill_category['icon']; ?>"></i>
                    <h3><?php echo $skill_category['title']; ?></h3>
                </div>
                <div class="skill-list">
                    <?php foreach ($skill_category['items'] as $skill): ?>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name"><?php echo $skill['name']; ?></span>
                            <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                        </div>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: <?php echo $skill['level']; ?>%"></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==================== CURSOS & CERTIFICADOS ==================== -->
<section id="courses-certificates" class="courses-certificates-section">
    <div class="container">
        <h2>Cursos & Certificados</h2>
        <div class="courses-certificates-tabs">
            <button class="tab-btn active" data-tab="courses"><i class="fas fa-book-open"></i> Cursos</button>
            <button class="tab-btn" data-tab="certificates"><i class="fas fa-certificate"></i> Certificados (<?php echo count($certificates); ?>)</button>
        </div>

        <div id="courses-tab" class="tab-content active">
            <div class="courses-container">
                <?php foreach ($courses as $course): ?>
                <div class="course-card">
                    <div class="course-header">
                        <i class="fas fa-laptop-code"></i>
                        <h3><?php echo $course['title']; ?></h3>
                    </div>
                    <div class="course-body">
                        <p><?php echo $course['description']; ?></p>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> <?php echo $course['duration']; ?></span>
                            <span><i class="fas fa-graduation-cap"></i> <?php echo $course['institution']; ?></span>
                        </div>
                        <div class="course-status"><i class="fas fa-spinner fa-pulse"></i> <?php echo $course['status']; ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div id="certificates-tab" class="tab-content">
            <div class="certificates-container">
                <?php foreach ($certificates as $cert): ?>
                <div class="certificate-card" data-certificate="<?php echo $cert['id']; ?>">
                    <div class="certificate-img">
                        <div class="pdf-placeholder">
                            <i class="fas fa-file-pdf"></i>
                            <p><?php echo htmlspecialchars(substr($cert['title'], 0, 40)) . '...'; ?></p>
                        </div>
                    </div>
                    <div class="certificate-body">
                        <div>
                            <span class="certificate-date"><i class="far fa-calendar-alt"></i> Concluído: <?php echo $cert['date_conclusion']; ?></span>
                            <span class="certificate-code"><i class="fas fa-key"></i> <?php echo substr($cert['certificate_id'], 0, 8); ?>...</span>
                        </div>
                        <h3><?php echo $cert['title']; ?></h3>
                        <p><?php echo $cert['short_desc']; ?></p>
                        <div class="certificate-actions">
                            <a href="certificados/<?php echo $cert['pdf_name']; ?>" download class="btn btn-pdf">
                                <i class="fas fa-download"></i> Baixar PDF
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ==================== PROJETOS ==================== -->
<section id="projects">
    <div class="container">
        <h2>Meus Projetos</h2>
        <div class="projects-container">
            <?php foreach ($projects as $project): ?>
            <div class="project-card">
                <div class="project-img">
                    <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                </div>
                <div class="project-body">
                    <h3><?php echo $project['title']; ?></h3>
                    <p><?php echo $project['description']; ?></p>
                    <div class="project-tech">
                        <?php foreach ($project['tech'] as $tech): ?>
                        <span class="tech-tag"><?php echo $tech; ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="project-links">
                        <a href="<?php echo $project['github']; ?>" target="_blank" class="project-link">
                            <i class="fab fa-github"></i> Ver Código
                        </a>
                        <a href="<?php echo $project['demo']; ?>" target="_blank" class="project-link outline">
                            <i class="fas fa-eye"></i> Demo ao Vivo
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="github-more">
            <a href="https://github.com/Nat46g" target="_blank" class="btn">
                <i class="fab fa-github"></i> Ver mais projetos no GitHub <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ==================== FOOTER ==================== -->
<footer id="contact">
    <div class="container">
        <div class="footer-container">
            <div class="footer-col">
                <h3><?php echo SITE_NAME; ?></h3>
                <p>Estudante do Ensino Médio e Desenvolvedor em formação. Apaixonado por tecnologia e programação.</p>
                <div class="tech-footer-icons">
                    <span><i class="fab fa-js"></i> JavaScript</span>
                    <span><i class="fab fa-php"></i> PHP</span>
                    <span><i class="fas fa-database"></i> MySQL</span>
                </div>
                <div class="social-icons">
                    <a href="<?php echo $contact_info['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="<?php echo $contact_info['github']; ?>" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="<?php echo $contact_info['instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/<?php echo $contact_info['whatsapp']; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h3>Contato</h3>
                <p><i class="fas fa-envelope"></i> <?php echo $contact_info['email']; ?></p>
                <p><i class="fas fa-phone"></i> <?php echo $contact_info['phone']; ?></p>
                <p><i class="fas fa-map-marker-alt"></i> <?php echo $contact_info['location']; ?></p>
            </div>
            <div class="footer-col">
                <h3>Objetivos</h3>
                <p>✓ Concluir o Ensino Médio e curso técnico</p>
                <p>✓ Desenvolver projetos práticos</p>
                <p>✓ Ingressar na faculdade de Ciência da Computação</p>
                <p>✓ Tornar-se um desenvolvedor full stack</p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; <?php echo CURRENT_YEAR; ?> <?php echo SITE_NAME; ?>. Todos os direitos reservados. | Estudante e Desenvolvedor em Formação</p>
        </div>
    </div>
</footer>

<script>
// ==================== DOM ELEMENTOS ====================
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.getElementById('mainNav');
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    // ==================== MENU MOBILE ====================
    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', () => {
            mainNav.classList.toggle('active');
        });
        document.querySelectorAll('#mainNav a').forEach(link => {
            link.addEventListener('click', () => mainNav.classList.remove('active'));
        });
    }

    // ==================== TABS ====================
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const tabId = btn.getAttribute('data-tab');
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            btn.classList.add('active');
            const activeTab = document.getElementById(`${tabId}-tab`);
            if (activeTab) activeTab.classList.add('active');
        });
    });

    // ==================== SMOOTH SCROLL ====================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
            }
        });
    });

    // ==================== ANIMAÇÃO SKILLS ====================
    const skillBars = document.querySelectorAll('.skill-level-bar');
    const skillsSection = document.querySelector('#skills');
    if (skillsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    skillBars.forEach(bar => {
                        const width = bar.style.width;
                        bar.style.width = '0%';
                        setTimeout(() => { bar.style.width = width; }, 100);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        observer.observe(skillsSection);
    }

    // ==================== HEADER SCROLL ====================
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            header.style.padding = '10px 0';
        } else {
            header.style.padding = '15px 0';
        }
    });

    console.log('Portfólio carregado com sucesso!');
});
</script>

</body>
</html>
