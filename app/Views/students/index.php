<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h5>Student Data
                        <a href="<?= base_url('students/create') ?>" class="btn btn-info-sm float-end">Add</a>
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="mydatatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Action</th>
                                <th>Using Deletemethod</th>
                                <th>ConfirmDelete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($students): ?>
                                <?php foreach($students as $row): ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td>
                                        <a href="<?=base_url('student/edit/'.$row['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?=base_url('student/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                    <td>
                                        <form action="<?= base_url('student/delete-method/'.$row['id']) ?>" method="POST">
                                            <input type= "hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                                        </form>
                                    </td>

                                    <td>
                                        <button type="button" value="<?= $row['id']; ?>" class=" confirm_del_btn btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
    

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    $(document).ready(function () {
        $('.confirm_del_btn').click(function (e) { 
            e.preventDefault();
            var id =$(this).val();
            swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) 
            {
                $.ajax({
            url: "/student/confirm-delete/"+id,
            success: function(response){
                swal({
            title: response.status ,
            text: response.status_text ,
            icon: response.status_icon ,
            button: "OK",
            }).then((confirmed)=>{
                window.location.reload();
            });
                
            }
           });
            }
             else {
                swal("You have canceled on deleting this data");
            }
            });
            
        });
    });
    
// $(document).ready(function(){
//     $('.confirm_del_btn').click(function(e){
//         e.preventDefault();
//         var id= $(this).val();
//         if(confirm("Do you want to delete this data?"))
//         {
//            // alert(id);
//            $.ajax({
//             url: "/student/confirm-delete/"+id,
//             success: function(response){
//                 window.location.reload();
//                 alert("Data Deleted");
//             }
//            })
//         }
//     });
// });

</script>
<?= $this->endSection() ?>
