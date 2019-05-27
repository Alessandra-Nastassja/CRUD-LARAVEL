<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mb-3">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
            <li @if ($current == 'index') class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/">Home </a>
            </li>
            <li @if ($current == 'produto') class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/produtos">Produtos</a>
            </li>
            <li @if ($current == 'categoria') class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/categorias">Categorias</a>
            </li>
        </ul>
    </div>
</nav>