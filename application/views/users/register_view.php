<h2>Registration Form</h2>

<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors('<p class="bg-danger">'); ?>

<?php echo form_open('users/register', $attributes); ?>

<div class="form-group">
    <?php echo form_label('Username'); ?>
    <?php 
        $data = array(
            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Enter username...',
        )
    ?>

    <?php echo form_input($data); ?>
</div>

<div class="form-group">
    <?php echo form_label('Password'); ?>
    <?php 
        $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter password...',
            'type' => 'password'
        )
    ?>

    <?php echo form_input($data); ?>
</div>

<div class="form-group">
    <?php echo form_label('Confirm Password'); ?>
    <?php 
        $data = array(
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm password...',
            'type' => 'password'
        )
    ?>

    <?php echo form_input($data); ?>
</div>

<div class="form-group">
    <?php echo form_label('Firstname'); ?>
    <?php 
        $data = array(
            'class' => 'form-control',
            'name' => 'first_name',
            'placeholder' => 'Enter firstname...',
        )
    ?>

    <?php echo form_input($data); ?>
</div>

<div class="form-group">
    <?php echo form_label('Lastname'); ?>
    <?php 
        $data = array(
            'class' => 'form-control',
            'name' => 'last_name',
            'placeholder' => 'Enter lastname...',
        )
    ?>

    <?php echo form_input($data); ?>
</div>

<div class="form-group">
    <?php echo form_label('Email'); ?>
    <?php 
        $data = array(
            'class' => 'form-control',
            'name' => 'email',
            'placeholder' => 'Enter email...',
            'type' => 'email'
        )
    ?>

    <?php echo form_input($data); ?>
</div>

<div class="form-group">
    <?php 
        $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Register'
        )
    ?>

    <?php echo form_submit($data); ?>
</div>

<?php echo form_close(); ?>