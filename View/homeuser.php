
        <div class="flex-search">
            <div>
                <h1>Choose Language & Level</h1>
            </div>
            <form class="container-form-search">
                <div class="containerSearch">
                    <select class="ddlSearch">
                        <option>Choose Language</option>
                        <?php
                            foreach ($bahasa as $key => $value){
                                echo "<option>";
                                echo "$value[0]";
                                echo "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="containerSearch">
                    <select class="ddlSearch">
                        <option>Choose Level</option>
                        <?php
                            foreach ($level as $key => $value){
                                echo "<option>";
                                echo "$value[0]";
                                echo "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="containerSearch"><input class="attemptBtn" type=submit value="Attempt"/></div>
            </form>
        </div>