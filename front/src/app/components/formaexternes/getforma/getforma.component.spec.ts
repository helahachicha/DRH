import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GetformaComponent } from './getforma.component';

describe('GetformaComponent', () => {
  let component: GetformaComponent;
  let fixture: ComponentFixture<GetformaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ GetformaComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(GetformaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
