<h1>
    Welcome:
    <?php
        $user = $this->session->userdata('user');
        echo $user->name
    ?>
</h1>