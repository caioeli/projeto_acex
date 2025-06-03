<link rel="stylesheet" href="../css/style.css">
<script src="../js/scripts.js"></script>
<?php include('../controller/mensagem.php'); ?>

<h1 class="text-center my-4">Ajuda</h1>
<div class="container mt-3 mx-auto" style="max-width: 465px;">
  <div class="card shadow"style="width: 400px;">
    <div class="card-body" style="width: 400px;">
      <h4 class="card-title mb-4 text-center">Fale Conosco</h4>
      <form action="../controller/acoes.php" method="POST" onsubmit="chamarLoader()">
        <div class="mb-3">
          <label for="nomeAjuda" class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" id="nomeAjuda" placeholder="" required>
        </div>
        <div class="mb-3">
          <label for="emailAjuda"  class="form-label">Seu e-mail</label>
          <input type="email" name="email" class="form-control" id="emailAjuda" placeholder="seuemail@exemplo.com" required>
        </div>
        <div class="mb-3">
          <label for="contatoAjuda"  class="form-label">Contato</label>
          <input type="tel"  name="contato" class="form-control" id="contatoAjuda" maxlength="15" placeholder="(99) 99999-9999" pattern="\(\d{2}\)\s?\d{4,5}-\d{4}" required>
        </div>
        <div class="mb-3">
          <label for="mensagemAjuda"  class="form-label">Sua mensagem</label>
          <textarea class="form-control" name="mensagem"  id="mensagemAjuda" rows="4" placeholder="Digite sua dúvida ou sugestão aqui..." required></textarea>
        </div>
        <div class="d-grid">
          <button type="submit" name="enviar"  class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>





<div class="accordion my-4" id="accordionExample" style="max-width: 800px; margin: 0 auto;">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button fw-bold text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="bi bi-question-circle me-2"></i> Como posso entrar em contato?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color: #333333; font-size: 16px;">
        Você pode usar o formulário acima para nos enviar sua dúvida ou sugestão. Responderemos o mais rápido possível pelo e-mail informado!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed fw-bold text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <i class="bi bi-info-circle me-2"></i> Como funciona o site?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color: #333333; font-size: 16px;">
        Nosso site oferece informações e recursos sobre inclusão e acessibilidade. Navegue pelos tópicos no menu para saber mais sobre cada tema.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed fw-bold text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <i class="bi bi-shield-lock me-2"></i> Meus dados estão seguros?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color: #333333; font-size: 16px;">
        Sim! Suas informações são tratadas com total confidencialidade e não serão compartilhadas com terceiros.
      </div>
    </div>
  </div>
</div>

<div class="loader-overlay">
<div class="loader"></div>
</div>