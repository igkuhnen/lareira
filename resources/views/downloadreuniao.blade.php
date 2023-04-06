@extends('layouts.app', ["current" => "lareirista"])
@section('content')
<main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Download Reunião</h1>
        <p class="lead text-muted">Aqui está a lista de PDFs para download das Reuniões.</p>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        {{-- <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %}
                <div class="card-body">
                  <p class="card-text">Reunião de Maio de 2023.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{url('/')}}"type="button" class="btn btn-sm btn-outline-secondary">Em Breve</a>
                    </div>
                  </div>
                </div>
            </div>
        </div> --}}

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              {{-- {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %} --}}
              <div class="card-body">
                <p class="card-text">Reunião de Abril de 2023.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="{{url('/downloadreuniaoabril')}}"type="button" class="btn btn-sm btn-outline-secondary">Baixar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              {{-- {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %} --}}
              <div class="card-body">
                <p class="card-text">Reunião de Março de 2023.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="{{url('/downloadreuniaomarco')}}"type="button" class="btn btn-sm btn-outline-secondary">Baixar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              {{-- {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %} --}}
              <div class="card-body">
                <p class="card-text">Reunião de Fevereiro de 2023.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="{{url('/downloadreuniaofevereiro')}}"type="button" class="btn btn-sm btn-outline-secondary">Baixar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %}
              <div class="card-body">
                <p class="card-text">Reunião de Janeiro de 2023.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="{{url('/downloadreuniaojaneiro')}}"type="button" class="btn btn-sm btn-outline-secondary">Baixar</a>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          {{-- <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %}
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %}
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %}
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %}
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div> --}}
          {{-- <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %}
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>

  </main>

  {{-- <footer class="text-muted">
    <div class="container">
      <p>New to Bootstrap? <a href="{{url('/download')}}">Visit the homepage</a> or read our getting started guide</a>.</p>
    </div>
  </footer> --}}

@endsection
