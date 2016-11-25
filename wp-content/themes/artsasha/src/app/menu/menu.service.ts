import {Injectable} from "@angular/core";
import * as glob from "../globals";
import { Http, Response} from "@angular/http";
import { Observable } from "rxjs/Observable";
import {Menu} from "./menu";
import 'rxjs/add/operator/map';

@Injectable()

export class MenuService {
    private globals = `${glob.API_ENDPOINT}/wp-json/wp-api-menus/v2/menus`;
    constructor(private http: Http) { }

    getMenu(id: Number): Observable<Menu> {
        return this.http
            .get(`${this.globals}/${id}`)
            .map((res: Response) => res.json());
    }
}