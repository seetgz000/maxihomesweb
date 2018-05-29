<div class='loginBox '>
    <div class="panel-heading">
        <h3>
            Login
        </h3>
    </div>
    <hr/>
    <div class='panel-body'>
        <form method="post">
            <div class="input-group">
                <span class='input-group-addon' style='vertical-align:top;'>
                    <i class=' glyphicon glyphicon-user'>
                    </i>
                </span>
                <input name='username' type="text" class="form-control" placeholder='username'/>
            </div>
             <div class="input-group" style='margin-top : 3%;'>
                 <span class='input-group-addon' >
                     <i class=' glyphicon glyphicon-lock'>
                     </i>
                 </span>
                <input name='password' type="password" placeholder='password' class="form-control" />
            </div>
            <div class ="button-container">
                <input type="submit" value='login' class="btn btn-primary form-control">
            </div>
        </form>
        <?php if(isset($error)){ ?>
        <div class="alert alert-danger alert-dismissable">
            <?php echo $error; ?>
        </div>
        <?php } ;?>
    </div>
    
</div>
