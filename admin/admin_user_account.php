
    <?php include("page_header.php"); ?>
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <br>
                            <br>
                            <h2 class="heading-section">User Account Management</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-wrap">	
                                <?php 
                                            
                                            $cons = mysqli_connect('localhost', 'root', '');
                                            mysqli_select_db($cons, 'vaccinesia');
                                            $province = null;

                                            $result = mysqli_query($cons, "select * from user");
                                            $num = mysqli_num_rows($result);

                                            if ($num > 0) {
                                            ?>
                                                <h5><?php echo $num; ?> Result</h5><br>
                                                <table class="table table-responsive-xl">
                                                    <thead>
                                                        <tr>
                                                            <th>User Name</th>
                                                            <th>Phone No.</th>
                                                            <th>Email</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                            <?php
                                            while($d = mysqli_fetch_array($result)){
                                                ?>  
                                                <tbody>
                                                    <tr>
                                                        <td> <?php echo $d['Name']; ?> </td>
                                                        <td> (+62) <?php echo $d['PhoneNum']; ?> </td>
                                                        <td> <?php echo $d['Email']; ?> </td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                                
                                            <?php 
                                            }
                                            } else {
                                                ?>
                                                    <h5>No Result</h5><br>
                                                <?php
                                            }
                                            ?>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php include("page_footer.php"); ?>