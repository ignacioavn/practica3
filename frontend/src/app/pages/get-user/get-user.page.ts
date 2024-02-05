import { Component, OnInit } from '@angular/core';
import { PortfolioService } from 'src/app/services/portfolio.service';

@Component({
  selector: 'app-get-user',
  templateUrl: './get-user.page.html',
  styleUrls: ['./get-user.page.scss'],
})
export class GetUserPage implements OnInit {

  user: any = {};
  frameworks: any[] = [];
  hobbies: any[] = [];
  social_networks: any[] = [];

  constructor(private portfolioService: PortfolioService) { }

  ngOnInit(): void {
    this.getUser();
  }

  getUser() {
    this.portfolioService.getUser().subscribe(
      (response) => {
        console.log(response);
        if (response && response.length > 0) {
          this.user = response[0];
          this.frameworks = this.user.frameworks || [];
          this.hobbies = this.user.hobbies || [];
          this.social_networks = this.user.social_networks || [];
        }
      }
    );
  }

  updateUser(){}
}
