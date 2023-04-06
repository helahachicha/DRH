import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DetailFicheDevaluComponent } from './detail-fiche-devalu.component';

describe('DetailFicheDevaluComponent', () => {
  let component: DetailFicheDevaluComponent;
  let fixture: ComponentFixture<DetailFicheDevaluComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ DetailFicheDevaluComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(DetailFicheDevaluComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
