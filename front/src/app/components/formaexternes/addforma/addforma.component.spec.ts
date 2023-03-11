import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddformaComponent } from './addforma.component';

describe('AddformaComponent', () => {
  let component: AddformaComponent;
  let fixture: ComponentFixture<AddformaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AddformaComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AddformaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
