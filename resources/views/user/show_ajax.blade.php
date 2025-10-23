<div class="modal-header">
    <h5 class="modal-title">Detail User</h5>
</div>
<div class="modal-body">
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $user->user_id }}</td>
        </tr>
        <tr>
            <th>Username</th>
            <td>{{ $user->username }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $user->nama }}</td>
        </tr>
        <tr>
            <th>Level</th>
            <td>{{ $user->level->level_nama ?? '-' }}</td>
        </tr>
    </table>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
</div>
