import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-date',
  templateUrl: './date.component.html',
  styleUrls: ['./date.component.css']
})
export class DateComponent implements OnInit {
someNumber:number=10;
message:string=new Date().toDateString();
dateMessage:string;
x:number=10;
  //constructor() { }

  ngOnInit() {
  }

}
