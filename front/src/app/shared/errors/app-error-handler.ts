import {ErrorHandler, Injectable} from '@angular/core';
// import {SnotifyService} from 'ng-snotify';

@Injectable()
export class AppErrorHandler implements  ErrorHandler {
  constructor(
    // private Notify: SnotifyService
  ) { }


  handleError(error: any): void {

    // this.Notify.error(error.getError(), {timeout: 10000, showProgressBar: true, closeOnClick: true, pauseOnHover: true});
  }
}
