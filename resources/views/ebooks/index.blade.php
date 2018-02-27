<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"></style>
    <style type="text/css" href="https://cdn.datatables.net/colreorder/1.4.1/css/colReorder.dataTables.min.css"></style>
</head>
<body>
    <table id="ebook-table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Views</th>
                <th>Likes</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Views</th>
                <th>Likes</th>
            </tr>
        </tfoot>
    </table>
    <style type="text/css">
        td{
            text-align: center;
        }
    </style>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/colreorder/1.4.1/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#ebook-table').dataTable( {
                processing: true,
                serverSide: true,
                stateSave: true,
                ajax: "{{ url('/') }}/ebooks/ajax",
                columns: [
                    { data: "name" },
                    { data: "price" },
                    { data: "views" },
                    { data: "likes" }
                ],
                colReorder: true
            } );
        } );
    </script>
</body>
</html>