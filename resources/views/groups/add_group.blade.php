@extends('layout.master')

@section('content')

<form id="myForm" method="POST"  action="{{route('multi')}}" enctype="multipart/form-data">
@csrf
            <table id="emptbl" class="table table-bordered border-primar">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>ID No</th>
                        <th>Group Name</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr> 
                        <td id="col0"><input type="text" class="form-control" name="stuName[]" placeholder="Name" required></td> 
                        <td id="col1"><input type="text" class="form-control" name="stu_id[]" placeholder="ID No" required>
                        @error('stu_id')
                        {{$message}}
                        @enderror
                        </td>
                        <td id="col2"><input type="text" class="form-control" name="group_name[]" placeholder="Group Name" required></td> 
                    </tr>
                </tbody>  
            </table> 
            <table>
                <br>
                <tr> 
                    <td><button type="button" class="btn btn-sm btn-info" onclick="addRows()">Add</button></td>
                    <td><button type="submit" class="btn btn-primary btn-sm" name="">Save</button></td>
                </tr>  
            </table>
</form>

<script>
        function addRows()
        { 
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            var cellCount = table.rows[0].cells.length; 
            var row = table.insertRow(rowCount);
            for(var i =0; i <= cellCount; i++)
            {
                var cell = 'cell'+i;
                cell = row.insertCell(i);
                var copycel = document.getElementById('col'+i).innerHTML;
                cell.innerHTML=copycel;
                if(i == 2)
                { 
                    var radioinput = document.getElementById('col2').getElementsByTagName('input'); 
                    for(var j = 0; j <= radioinput.length; j++)
                    { 
                        if(radioinput[j].type == 'radio')
                        { 
                            var rownum = rowCount;
                            radioinput[j].name = 'gender['+rownum+']';
                        }
                    }
                }
            }
        }
</script>

@endsection