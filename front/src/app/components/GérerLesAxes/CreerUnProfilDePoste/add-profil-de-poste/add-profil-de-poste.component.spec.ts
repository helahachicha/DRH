import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddProfilDePosteComponent } from './add-profil-de-poste.component';

describe('AddProfilDePosteComponent', () => {
  let component: AddProfilDePosteComponent;
  let fixture: ComponentFixture<AddProfilDePosteComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AddProfilDePosteComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AddProfilDePosteComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
