<?php
// posting to the register route without any data in it, to see if it is posted with errors
it('has errors in details are not filled', function(){
    $this->post('/register')
    ->assertSessionHasErrors(['name', 'email', 'password']);
});

// test to see if the user registers sucessfully, and returns the login page for them to login
it('registers the user', function(){
    $this->post('/register', [
        'name' => 'speed',
        'email'=> 'speed@gmail.com',
        'password' => 'password',
        'password_confirmation' => 'password'
    ])->assertRedirect('/login');
});

// Sign in the user after everything is okay
it('will sign in the user after registry', function(){
    $this->post('/login',[
        'email' => 'speed@gmail.com',
        'password' => 'password'
    ]);
    $this->assertDatabaseHas('users', [
        'name'  => 'speed',
        'email' => 'speed@gmail.com'
    ])
    ->assertAuthenticated();
});
