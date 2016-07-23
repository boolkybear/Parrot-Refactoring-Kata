//
//  ParrotTests.swift
//  ParrotSwift
//

import XCTest

// If needed, remove comment
//@testable import YourModuleName

class ParrotTests: XCTestCase {
    
    override func setUp() {
        super.setUp()
        // Put setup code here. This method is called before the invocation of each test method in the class.
    }
    
    override func tearDown() {
        // Put teardown code here. This method is called after the invocation of each test method in the class.
        super.tearDown()
    }
    
	func testGetSpeedOfEuropeanParrot() {
		let parrot = EuropeanParrot()
		XCTAssert(parrot.getSpeed() == 12.0)
	}

	func testGetSpeedOfAfricanParrot_With_One_Coconut() {
		let parrot = Parrot(_type: ParrotTypeEnum.AFRICAN, numberOfCoconuts: 1, voltage: 0, isNailed: false)
		XCTAssert(parrot.getSpeed() == 3.0)
	}
	
	func testGetSpeedOfAfricanParrot_With_Two_Coconuts() {
		let parrot = Parrot(_type: ParrotTypeEnum.AFRICAN, numberOfCoconuts: 2, voltage: 0, isNailed: false)
		XCTAssert(parrot.getSpeed() == 0.0)
	}
	
	func testGetSpeedOfAfricanParrot_With_No_Coconuts() {
		let parrot = Parrot(_type: ParrotTypeEnum.AFRICAN, numberOfCoconuts: 0, voltage: 0, isNailed: false)
		XCTAssert(parrot.getSpeed() == 12.0)
	}
	
	func testGetSpeedNorwegianBlueParrot_nailed() {
		let parrot = Parrot(_type: ParrotTypeEnum.NORWEGIAN_BLUE, numberOfCoconuts: 0, voltage: 0, isNailed: true)
		XCTAssert(parrot.getSpeed() == 0.0)
	}
	
	func testGetSpeedNorwegianBlueParrot_not_nailed() {
		let parrot = Parrot(_type: ParrotTypeEnum.NORWEGIAN_BLUE, numberOfCoconuts: 0, voltage: 1.5, isNailed: false)
		XCTAssert(parrot.getSpeed() == 18.0)
	}
	
	func testGetSpeedNorwegianBlueParrot_not_nailed_high_voltage() {
		let parrot = Parrot(_type: ParrotTypeEnum.NORWEGIAN_BLUE, numberOfCoconuts: 0, voltage: 4, isNailed: false);
		XCTAssert(parrot.getSpeed() == 24.0)
	}
	
}
