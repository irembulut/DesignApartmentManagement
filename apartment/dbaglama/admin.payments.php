<?php include("includes/admin.header.php"); ?>      
            
            
            <div class="users">
            <h2>Payments</h2>

                <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Text</th>
                    <th scope="col">Date</th>

                    

                   <!--- <td><h6>Firstname</h6></td>
                    <td><h6>Lastname</h6></td>
                    <td><h6>Text</h6></td> --->

                </tr>
                </thead>
                <?php

                include ("includes/config.inc.php"); // Using database connection file here

                $records = mysqli_query($link,"select * from payments"); // fetch data from database

                while($data = mysqli_fetch_array($records))
                {
                ?>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $data['username']; ?></th>
                    <th scope="row"><?php echo $data['firstname']; ?></th>
                    <th scope="row"><?php echo $data['lastname']; ?></th>
                    <th scope="row"><?php echo $data['Text']; ?></th>
                    <th scope="row"><?php echo $data['reg_date']; ?></th>
                </tr>	
                <?php
                }
                ?>
                </table>
                
            
            </div>