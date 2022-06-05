<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
        <fieldset>
            

            <label>First Name</label>
            <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
            <span class="error"><?php echo $first_name_err ;?></span>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
            <span class="error"><?php echo $last_name_err ;?></span>

            <label>Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <span class="error"><?php echo $email_err ;?></span>

            <label>Gender</label>
            <ul>
                <li>
                    <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked" ';?>>Female
                </li>
                <li>
                    <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked" ';?>>Male
                </li>
                <li>
                    <input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked="checked" ';?>>Neither
                </li>
            </ul>
            <span class="error"><?php echo $gender_err ;?></span>

            <label>Phone</label>
            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
            <span class="error"><?php echo $phone_err ;?></span>

            <label>Favorite Place</label>
            <ul>
                <li>
                    <input type="checkbox" name="place[]" value="Ha Long Bay" <?php if(isset($_POST['place']) && in_array('Ha Long Bay', $place)) echo 'checked="checked" ';?>>Ha Long Bay
                </li>
                <li>
                    <input type="checkbox" name="place[]" value="Thien Mu Pagoda" <?php if(isset($_POST['place']) && in_array('Thien Mu Pagoda', $place)) echo 'checked="checked" ';?>>Thien Mu Pagoda
                </li>
                <li>
                    <input type="checkbox" name="place[]" value="Hoan Kiem Lake" <?php if(isset($_POST['place']) && in_array('Hoan Kiem Lake', $place)) echo 'checked="checked" ';?>>Hoan Kiem Lake
                </li>
                <li>
                    <input type="checkbox" name="place[]" value="Hoi An" <?php if(isset($_POST['place']) && in_array('Hoi An', $place)) echo 'checked="checked" ';?>>Hoi An
                </li>
            </ul>
            <span class="error"><?php echo $place_err ;?></span>

            <label>Favorite Food</label>
            <select name="food">
                <option value="" NULL <?php if(isset($_POST['food']) && $_POST['food'] == NULL) echo 'selected = "unselected"' ;?>>Select one</option>
                <option value="Phở" <?php if(isset($_POST['food']) && $_POST['food'] == 'Phở') echo 'selected = "selected"' ;?>>Phở</option>
                <option value="Bánh Mì" <?php if(isset($_POST['food']) && $_POST['food'] == 'Bánh Mì') echo 'selected = "selected"' ;?>>Bánh Mì</option>
                <option value="Cơm Tấm" <?php if(isset($_POST['food']) && $_POST['food'] == 'Cơm Tấm') echo 'selected = "selected"' ;?>>Cơm Tấm</option>
                <option value="Bún Bò Huế" <?php if(isset($_POST['food']) && $_POST['food'] == 'Bún Bò Huế') echo 'selected = "selected"' ;?>>Bún Bò Huế</option>
                <option value="Cao Lầu" <?php if(isset($_POST['food']) && $_POST['food'] == 'Cao Lầu') echo 'selected = "selected"' ;?>>Cao Lầu</option>
            </select>
            <span class="error"><?php echo $food_err ;?></span>

            <label>Comments</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
            <span class="error"><?php echo $comments_err ;?></span>

            <label>Privacy</label>
            <ul>
                <li>
                    <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked" ';?>>You must agree!
                </li>
            </ul>
            <span class="error"><?php echo $privacy_err ;?></span>

            <input type="submit" value="Send it!">
            <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ;?>'" value="Reset">
        </fieldset>
    </form>