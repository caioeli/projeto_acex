
<h1 class="text-center my-4">Ajuda</h1>

<div class="container mt-3 mx-auto" style="max-width: 300px;">
  <div class="card shadow">
    <div class="card-body">
      <h4 class="card-title mb-4 text-center">Fale Conosco</h4>
      <form>
        <div class="mb-3">
          <label for="emailAjuda" class="form-label">Seu e-mail</label>
          <input type="email" class="form-control" id="emailAjuda" placeholder="seuemail@exemplo.com" required>
        </div>
        <div class="mb-3">
          <label for="mensagemAjuda" class="form-label">Sua mensagem</label>
          <textarea class="form-control" id="mensagemAjuda" rows="4" placeholder="Digite sua dúvida ou sugestão aqui..." required></textarea>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="accordion my-4" id="accordionExample" style="max-width: 600px; margin: 0 auto;">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button fw-bold text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="bi bi-question-circle me-2"></i> Como posso entrar em contato?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
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
      <div class="accordion-body">
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
      <div class="accordion-body">
        Sim! Suas informações são tratadas com total confidencialidade e não serão compartilhadas com terceiros.
      </div>
    </div>
  </div>
</div>