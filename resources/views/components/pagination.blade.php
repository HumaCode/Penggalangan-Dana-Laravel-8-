<div class="d-flex justify-content-between mt-2">
    <p>Menampilkan {{ $model->firstItem() }} s/d {{ $model->lastItem() }} dari {{ $model->total() }} entry</p>

    {{ $model->links('pagination::bootstrap-4') }}
</div>