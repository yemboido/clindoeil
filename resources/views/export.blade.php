<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">

    
    <div class="container-">
      
<table id="example" class="display nowrap row" style="width:100%">
        <thead>
            <tr>
                <th>Nom</th>
                     <th>Email</th>
                     <th>Role</th>
                     <th>Status</th>
                     <th>Action</th>
            </tr>
        </thead>
        <tbody>

           @foreach($menbres as $user)
                   <tr>
                     <td>{{$user->name}}</td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->role}}</td>
                     <td>{{$user->status}}</td>
                     <td class="row">
                      <form action="{{route('desactiver')}}" method="post">
                        @csrf
                        <input type="hidden" name="membre_id" value="{{$user->id}}">
                        <button type="submit">desactiver</button>
                      </form>
                       <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">Modifier</a>
                     </td>
                   </tr>
                   @endforeach
         
        </tbody>
       
    </table>

    </div>




    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

      <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
        <!--content end -->
<script type="text/javascript">
  
        $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
     
         buttons: [
            {
                extend: 'excelHtml5',
                title: 'Data_export'
            },
            {
                extend: 'pdfHtml5',
                title: 'Data_export'
            }
        ]
    } );
} );

</script>