<div class="card-body">
    <form action="{{ $model }}" method="GET">
        <div class="row">
            <div class="col-2">
                <div class="form-group">
                    <input type="text"
                           class="form-control"
                           name="keyword"
                           placeholder="Inserta tu búsqueda"
                           value="{{ old('keyword'), request()->input('keyword') }}">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <select name="status" class="form-control">
                        <option value="">---</option>
                        <option value="0" {{ old('status', request()->input('status') == '0' ? 'selected' : '') }}>Inactivo</option>
                        <option value="1" {{ old('status', request()->input('status') == '1' ? 'selected' : '') }}>Activo</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <select name="sortBy" class="form-control">
                        <option value="">---</option>
                        <option value="id" {{ old('sortBy', request()->input('sortBy') == 'id' ? 'selected' : '') }}>ID</option>
                        <option value="name" {{ old('sortBy', request()->input('sortBy') == 'name' ? 'selected' : '') }}>Nombre</option>
                        <option value="created_at" {{ old('sortBy', request()->input('sortBy') == 'created_at' ? 'selected' : '') }}>Creado el</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <select name="orderBy" class="form-control">
                        <option value="">---</option>
                        <option value="asc" {{ old('orderBy', request()->input('orderBy') == 'asc' ? 'selected' : '') }}>Ascendiente</option>
                        <option value="desc" {{ old('orderBy', request()->input('orderBy') == 'desc' ? 'selected' : '') }}>Descendiente</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <select name="limitBy" class="form-control">
                        <option value="">---</option>
                        <option value="10" {{ old('limitBy', request()->input('limitBy') == '10' ? 'selected' : '') }}>10</option>
                        <option value="20" {{ old('limitBy', request()->input('limitBy') == '20' ? 'selected' : '') }}>20</option>
                        <option value="50" {{ old('limitBy', request()->input('limitBy') == '50' ? 'selected' : '') }}>50</option>
                        <option value="100" {{ old('limitBy', request()->input('limitBy') == '100' ? 'selected' : '') }}>100</option>
                    </select>
                </div>
            </div>
            <div class="col-1">
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-link">Buscar</button>
                </div>
            </div>
        </div>
    </form>
</div>
