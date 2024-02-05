import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { GetUserPage } from './get-user.page';

const routes: Routes = [
  {
    path: '',
    component: GetUserPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class GetUserPageRoutingModule {}
