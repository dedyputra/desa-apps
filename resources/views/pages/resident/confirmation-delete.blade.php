<!-- Modal Delete -->
<div class="modal fade" id="confirmationDelete-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmationDeleteLabel-{{ $item->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="{{ route('resident.destroy', $item->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmationDeleteLabel-{{ $item->id }}">Konfirmasi Hapus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <span>Apakah yakin ingin menghapus data ini?</span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-outline-danger">Ya, Hapus!</button>
        </div>
      </div>
    </form>
  </div>
</div>
