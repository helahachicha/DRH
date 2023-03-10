export class AppError {

  private errorMessage = 'Connection au serveur non possible pour le moment.';

  constructor(public originalError: any){}

  getError(){
    if (this.originalError && this.originalError.error.message && this.originalError.status !== 0){
      this.errorMessage = this.originalError.error.message;
    }
    return this.errorMessage;
  }
}
