<div class="modal fade" id="modalGame" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" >Que voulez-vous faire ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- <div class="modal-body">
                <p>{{ $game->id }}</p>
                ...
            </div> --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary text-white">Payer</button>
                <form method="POST" action="{{ route('carts.store', ['game_id' => $game->id]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary text-white">Ajouter au pannier</button>
                </form>
            </div>
        </div>
    </div>
</div>