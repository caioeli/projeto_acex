<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Onda Vertical</title>
  <style>
    body {
      margin: 0;
      display: flex;
    }

    .wave-container {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100px; /* largura da onda */
      z-index: 0;
    }

    .wave-container svg {
      height: 100%;
      width: 100%;
      transform: rotate(90deg); /* gira a onda para ficar vertical */
    }

    .content {
      margin-left: 100px; /* espaço para a onda */
      padding: 20px;
      z-index: 1;
    }
  </style>
</head>
<body>
  <div class="wave-container">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none">
      <path d="M0,0 C150,100 350,0 500,100 L500,0 L0,0 Z" fill="#4FC3F7" />
    </svg>
  </div>

  <div class="content">
    <h1>Conteúdo do site</h1>
    <p>Aqui está o conteúdo principal do site, ao lado da onda vertical.</p>
  </div>
</body>
</html>