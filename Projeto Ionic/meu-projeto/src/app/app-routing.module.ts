import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LoginPage } from './login/login.component';
import { HomePage } from "./home/home.page.component";

const routes: Routes = [
  {
    path: 'login',
    component: LoginPage
  },
  {
    path: 'home',
    component: HomePage // Adicione a rota para a página inicial
  },
  // outras rotas aqui
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
