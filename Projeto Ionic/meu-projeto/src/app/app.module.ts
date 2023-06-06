import { ReactiveFormsModule } from '@angular/forms';
import { AppComponent } from './app.component';
import { BrowserModule } from '@angular/platform-browser';
import { AppRoutingModule } from './app-routing.module';
import { NgModule } from '@angular/core';
import { IonicModule } from '@ionic/angular';
import { LoginPage } from './login/login.component';
import { HomePage } from './home/home.page.component';


@NgModule({
  declarations: [
    AppComponent,
    LoginPage,
    HomePage
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(),
    AppRoutingModule,
    ReactiveFormsModule // Importe o módulo aqui
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
