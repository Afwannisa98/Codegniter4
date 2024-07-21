<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">


            <div class="card">
                <div class="card-header">
                <h5>Edit Student
                    <a href="<?= base_url('students') ?>" class="btn btn-danger sm float-end">Back</a>
                </h5>
            </div>

            
            <div class="card-body">
                <form action="<?= base_url('student/update/'.$student['id']) ?>" method="POST">
                    <input type="hidden" name="_method" value="PUT"/>
                    <div class="form-group mb-2">
                        <label>Name</label>
                        <input type="text" name="name" value="<?= $student['name']; ?>" class="form-control" placeholder="Enter Name" required>
                    </div>

                    <div class="form-group mb-2">
                        <label>Email</label>
                        <input type="text" name="email" value="<?= $student['email']; ?>" class="form-control" placeholder="Enter Email" required>
                    </div>

                    <div class="form-group mb-2">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" value="<?= $student['phone']; ?>" placeholder="Enter Phone" required>
                    </div>

                    <div class="form-group mb-2">
                        <label>Course</label>
                        <input type="text" name="course" class="form-control" value="<?= $student['course']; ?>" placeholder="Enter Course" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
