import { Component, OnInit } from '@angular/core';
import { MenuService } from "./menu.service"
import { Menu } from "./menu";
@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.css'],
  providers: [MenuService]
})
export class MenuComponent implements OnInit {

  constructor(private menuService: MenuService) { }

  menu: Menu[];

  ngOnInit() {
  this.getMenu();
  }

  getMenu() {
    this.menuService.getMenu(2).subscribe(res => {
      this.menu = res.items;
      console.log(this.menu);
    })
  }


}
