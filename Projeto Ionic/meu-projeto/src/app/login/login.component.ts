import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators, FormControl } from '@angular/forms';
import { Router } from '@angular/router';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss'],
})

export class LoginPage implements OnInit {
  loginForm: FormGroup = new FormGroup({
    email: new FormControl('', Validators.required),
    password: new FormControl('', Validators.required)
  });
  
  constructor(private formBuilder: FormBuilder, private router: Router) {}

  ngOnInit() {
    this.loginForm = this.formBuilder.group({
      username: ['', Validators.required],
      password: ['', Validators.required],
    });
  }

  login() {
    // Processar as informações do formulário e redirecionar para a página inicial do aplicativo
    const username = this.loginForm.value.username;
    const password = this.loginForm.value.password;

    // Lógica para validar as credenciais do usuário pode ser adicionada aqui

    // Redirecionar para a página inicial do aplicativo
    this.router.navigate(['/home']);
  }
}
