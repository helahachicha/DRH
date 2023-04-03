import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DetailFichRensigComponent } from './detail-fich-rensig.component';

describe('DetailFichRensigComponent', () => {
  let component: DetailFichRensigComponent;
  let fixture: ComponentFixture<DetailFichRensigComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ DetailFichRensigComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(DetailFichRensigComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
