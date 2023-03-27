<?php

return function ($kirby) {

  // Handle the form submission
  if ($kirby->request()->is('POST') && get('submit')) {

    // Set up the rules for the form validation
    $rules = [
      'name' => ['required', 'min:3'],
      'email' => ['required', 'email'],
      'phone' => ['required', 'regex:/^\(\d{3}\)\s\d{3}\-\d{4}$/'],
      'role' => ['required'],
      'message' => ['required', 'min:10']
    ];

    // Set up the messages for the validation errors
    $messages = [
      'name.required' => 'Please enter your name',
      'name.min' => 'Your name must be at least 3 characters long',
      'email.required' => 'Please enter your email address',
      'email.email' => 'Please enter a valid email address',
      'phone.required' => 'Please enter your phone number',
      'phone.regex' => 'Please enter a valid phone number in the format (123) 456-7890',
      'role.required' => 'Please select a role',
      'message.required' => 'Please enter a message',
      'message.min' => 'Your message must be at least 10 characters long'
    ];

    // Validate the form data
    $data = $kirby->request()->data();
    $validation = $kirby->validator($data, $rules, $messages);

    if ($validation->fails()) {

      // If there are validation errors, return the user to the contact form with error messages
      $kirby->session()->set('contact.errors', $validation->errors());
      $kirby->session()->set('contact.old', $data);
      go($page->url());

    } else {

      // If the form data is valid, send the email
      $email = email([
        'to' => 'youremail@example.com',
        'from' => 'contactform@example.com',
        'subject' => 'New Contact Form Submission',
        'replyTo' => $data['email'],
        'data' => [
          'name' => $data['name'],
          'email' => $data['email'],
          'phone' => $data['phone'],
          'role' => $data['role'],
          'message' => $data['message']
        ],
        'template' => 'email.contact'
      ]);

      // If the email is sent successfully, redirect the user to a thank-you page
      if ($email) {
        $kirby->session()->set('contact.success', true);
        go($page->url() . '/thanks');
      } else {
        // If the email fails to send, return the user to the contact form with an error message
        $kirby->session()->set('contact.errors', ['An error occurred while sending your message. Please try again.']);
        $kirby->session()->set('contact.old', $data);
        go($page->url());
      }

    }

  }

};
