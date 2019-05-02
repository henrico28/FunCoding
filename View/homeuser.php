
        <div class="flex-search">
            <div>
                <h1>Choose Language & Level</h1>
            </div>
            <form class="container-form-search" method = "POST" action = "search">
                <div class="containerSearch">
                    <select required class="ddlSearch" name="language">
                        <option value ="">Choose Language</option>
                        <?php
                            foreach ($bahasa as $key => $value){
                                echo "<option value='$value[0]'>";
                                echo "$value[0]";
                                echo "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="containerSearch">
                    <select required class="ddlSearch" name="level">
                        <option value = "">Choose Level</option>
                        <?php
                            foreach ($level as $key => $value){
                                echo "<option value='$value[0]'>";
                                echo "$value[0]";
                                echo "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="containerSearch"><input class="attemptBtn" type=submit value="Attempt"/></div>
            </form>
        </div>