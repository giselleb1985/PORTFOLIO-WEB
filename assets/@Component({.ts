import {Component, OnInit} from '@angular/core';
@Component({
    selector: 'app-logo-ap',
    templateUrl: './logo-AudioParam.component.html',
    styleUrls:[ './logo-ap.component.css']
})
export class LogoAPComponent implements OnInit {
    constructor(private router:Router) {}
    ngOnInit(): void {

    }
    login(){
        this.router.navigate(['/login'])
    }
}