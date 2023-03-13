<x-app-layout>
    <div class="mt-3 container">
        <div class="card">
            <div class="card-header">Crud Generator</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Tables</h4>
                        <div class="list-group">
                            @foreach($tables as $tbl)
                                <a href="#" onclick="getFields('{{ $tbl->Tables_in_laravel }}')" class="list-group-item
                                list-group-item-action
                                @if(in_array($tbl->Tables_in_laravel, $existing))
                                active
                                @endif
                                ">{{ $tbl->Tables_in_laravel }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form id="mainFrom">
                            <div id="frm">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            const select = '<select name="sel[]" class="form-control form-control-sm">' +
                '<option value="checkbox">CheckBox</option>' +
                '<option value="null">Don\'t Display</option>' +
                '<option value="input">Input</option>' +
                '<option value="input-date">Input Date</option>' +
                '<option value="input-num">Input Number</option>' +
                '<option value="input-time">Input Time</option>' +
                '<option value="richText">Rich Text</option>' +
                '<option value="select">Select</option>' +
                '<option value="text">Text</option>' +
                '</select>';
            const validate = '<select name="null[]" class="form-control form-control-sm"><option value="1">Yes</option><option value="0">No</option></select>';
            const leave = ['id', 'created_at', 'updated_at', 'deleted_at'];
            function getFields(val){
                $.ajax({
                    url: '/api/table-fields/'+val,
                    dataType: 'JSON',
                    method: 'GET',
                    success: function (response) {
                        let html = '<input type="hidden" name="tbl" value="'+val+'"/>';
                        let name='';

                        for (let i=0; i< response.length; i++)
                        {
                            if(!leave.includes(response[i]['Field'])) {
                                html += '<div class="row mb-3"><label class="form-label col-md-3">' + response[i]['Field'] + '</label>';
                                html += '<div class="col-md-5"><input type="hidden" name="name[]" value="' + response[i]['Field'] + '"/><input name="description[]" class="form-control form-control-sm" value="' + capitalize(response[i]['Field']) + '"></div>';
                                html += '<div class="col-md-2">' + select + '</div>';
                                html += '<div class="col-md-1">' + validate + '</div>';
                                html += '</div>';
                            }
                        }
                        html += '<button type="submit" class="btn btn-primary btn-sm">Generate Crud</button>';
                        $('#frm').html(html);
                    }
                })
            }

            function capitalize(str)
            {
                str = str.replace("_", " ");
                return str.split(" ").map(item=>item.substring(0,1).toUpperCase()+item.substring(1)).join(" ")
            }
            $('#mainFrom').submit((e)=>{
                e.preventDefault();
                let formData = $('#mainFrom');
                $.ajax({
                    url: '/api/save-table',
                    method: 'POST',
                    dataType: 'JSON',
                    data: formData.serialize(),
                    success: function (response) {
                        alert('Done');
                    }
                });
                $('#frm').html("");
            })
        </script>
    @endpush
</x-app-layout>
