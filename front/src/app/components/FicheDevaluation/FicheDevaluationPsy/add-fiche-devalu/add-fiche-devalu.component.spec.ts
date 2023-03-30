import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddFicheDevaluComponent } from './add-fiche-devalu.component';

describe('AddFicheDevaluComponent', () => {
  let component: AddFicheDevaluComponent;
  let fixture: ComponentFixture<AddFicheDevaluComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AddFicheDevaluComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AddFicheDevaluComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
