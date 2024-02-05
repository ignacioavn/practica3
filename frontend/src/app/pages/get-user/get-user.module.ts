import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { GetUserPageRoutingModule } from './get-user-routing.module';

import { GetUserPage } from './get-user.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    GetUserPageRoutingModule
  ],
  declarations: [GetUserPage]
})
export class GetUserPageModule {}
