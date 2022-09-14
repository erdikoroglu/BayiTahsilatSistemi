<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
        <div class="card-toolbar">
            {{ $actions }}
        </div>
    </div>
    <div class="card-body">
       {{ $slot }}
    </div>
    <div class="card-footer">
        {{ $footer }}
    </div>
</div>