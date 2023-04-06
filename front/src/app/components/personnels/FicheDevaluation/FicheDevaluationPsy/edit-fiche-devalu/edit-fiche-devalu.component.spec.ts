import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EditFicheDevaluComponent } from './edit-fiche-devalu.component';

describe('EditFicheDevaluComponent', () => {
  let component: EditFicheDevaluComponent;
  let fixture: ComponentFixture<EditFicheDevaluComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EditFicheDevaluComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(EditFicheDevaluComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
